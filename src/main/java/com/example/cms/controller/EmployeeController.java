package com.example.cms.controller;

import com.example.cms.service.EmployeeService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.BeanFactory;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class EmployeeController {

    private final EmployeeService employeeService;

    @Autowired
    public EmployeeController(EmployeeService employeeService) {
        this.employeeService = employeeService;
    }

    @Autowired
    private BeanFactory beanFactory;

    @GetMapping("/employees")
    public Object getEmployees() {

        // Getting bean using BeanFactory
        EmployeeService service = beanFactory.getBean(EmployeeService.class);

        return service.getAllEmployees();
    }
}