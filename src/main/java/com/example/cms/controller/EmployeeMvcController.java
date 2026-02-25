package com.example.cms.controller;

import com.example.cms.service.EmployeeService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class EmployeeMvcController {

    @Autowired
    private EmployeeService employeeService;

    @GetMapping("/employee-view")
    public String viewEmployees(Model model) {

        model.addAttribute("employees", employeeService.getAllEmployees());

        return "employee";
    }
}