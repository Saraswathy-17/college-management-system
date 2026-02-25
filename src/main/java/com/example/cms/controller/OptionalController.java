package com.example.cms.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

import com.example.cms.service.TeacherOptionalService;

@RestController
public class OptionalController {

    @Autowired
    private TeacherOptionalService teacherOptionalService;

    @GetMapping("/optional-test")
    public String testOptional() {
        return teacherOptionalService.performAction();
    }
}