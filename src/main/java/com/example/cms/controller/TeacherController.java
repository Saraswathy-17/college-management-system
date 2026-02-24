package com.example.cms.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import com.example.cms.entity.Teacher;
import com.example.cms.repository.TeacherRepository;

import java.util.List;

@RestController
@RequestMapping("/teachers")
public class TeacherController {

    @Autowired
    private TeacherRepository teacherRepository;

    @GetMapping
    public List<Teacher> getAllTeachers() {
        return teacherRepository.findAll();
    }

    @PostMapping
    public Teacher addTeacher(@RequestBody Teacher teacher) {
        return teacherRepository.save(teacher);
    }
}