package edu.app.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import edu.app.entity.Student;

public interface StudentRepository extends JpaRepository<Student, Integer> {
}