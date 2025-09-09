<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(StoreEmployeeRequest $request)
    {
        $data = $request->validated();
    
        // Các field là ngày
        $dateFields = [
            'join_date',
            'contract_date',
            'resign_date',
            'tax_issued_date',
            'insurance_start',
            'birth_year',
            'id_issued_date',
        ];
    
        foreach ($dateFields as $field) {
            if (!empty($data[$field])) {
                // parse Y-m-d -> timestamp
                $data[$field] = Carbon::createFromFormat('Y-m-d', $data[$field])->timestamp;
            }
        }
    
        Employee::create($data);
        
        return redirect()->route('employees.index')
                         ->with('success','Employee created successfully.');
    }
    

    public function show(Employee $employee)
    {
        return view('employees.show',compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit',compact('employee'));
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->validated());

        return redirect()->route('employees.index')
                        ->with('success','Employee updated successfully');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
                        ->with('success','Employee deleted successfully');
    }

    public function importCsv(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt|max:2048',
        ]);

        $file = $request->file('csv_file');
        $path = $file->getRealPath();
        $data = array_map('str_getcsv', file($path));

        // Assuming the first row is the header
        $header = array_map('trim', array_shift($data));

        $employeesToInsert = [];
        foreach ($data as $row) {
            if (count($header) != count($row)) {
                continue; // Skip invalid rows
            }
            $employeeData = array_combine($header, $row);

            // Convert date fields to timestamp
            $dateFields = [
                'join_date',
                'contract_date',
                'resign_date',
                'tax_issued_date',
                'insurance_start',
                'birth_year',
                'id_issued_date',
            ];

            foreach ($dateFields as $field) {
                if (isset($employeeData[$field]) && !empty($employeeData[$field])) {
                    try {
                        $employeeData[$field] = Carbon::parse($employeeData[$field])->timestamp; // Use Carbon::parse for flexible date parsing
                    } catch (\Exception $e) {
                        $employeeData[$field] = null; // Set to null if date parsing fails
                    }
                }
            }
            $employeesToInsert[] = $employeeData;
        }

        // Insert in chunks for performance if there are many records
        foreach (array_chunk($employeesToInsert, 1000) as $chunk) {
            Employee::insert($chunk);
        }

        return redirect()->route('employees.index')
                        ->with('success','CSV data imported successfully.');
    }
}
