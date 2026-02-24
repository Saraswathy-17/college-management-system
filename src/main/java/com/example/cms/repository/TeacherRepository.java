package com.example.cms.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import com.example.cms.entity.Teacher;

public interface TeacherRepository extends JpaRepository<Teacher, Long> {
}