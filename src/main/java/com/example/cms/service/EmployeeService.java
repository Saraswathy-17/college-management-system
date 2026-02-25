package com.example.cms.service;

import com.example.cms.entity.Employee;
import org.springframework.stereotype.Component;

import java.util.ArrayList;
import java.util.List;

@Component
public class EmployeeService {

    private List<Employee> employees = new ArrayList<>();

    public EmployeeService() {
        employees.add(new Employee(1, "Ravi", "HR"));
        employees.add(new Employee(2, "Anu", "IT"));
    }

    public List<Employee> getAllEmployees() {
        return employees;
    }
}