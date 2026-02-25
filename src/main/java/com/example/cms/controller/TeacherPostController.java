package com.example.cms.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.*;

import com.example.cms.entity.Teacher;
import com.example.cms.repository.TeacherRepository;

@RestController
@RequestMapping("/teachers")
public class TeacherPostController {

    @Autowired
    private TeacherRepository teacherRepository;

    @PostMapping("/add")
    public Teacher addTeacher(@RequestBody Teacher teacher) {
        return teacherRepository.save(teacher);
    }
}