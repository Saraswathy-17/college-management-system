package edu.app.service;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import edu.app.entity.Student;
import edu.app.repository.StudentRepository;

@Service
public class StudentService {

    @Autowired
    private StudentRepository repository;

    public Student saveStudent(Student student) {
        return repository.save(student);
    }

    public List<Student> getAllStudents() {
        return repository.findAll();
    }

    public Student getStudentById(Integer id) {
        Optional<Student> student = repository.findById(id);
        return student.orElse(null);
    }

    public Student updateStudent(Integer id, Student newStudent) {
        Student oldStudent = repository.findById(id).orElse(null);

        if (oldStudent != null) {
            oldStudent.setName(newStudent.getName());
            oldStudent.setDepartment(newStudent.getDepartment());
            oldStudent.setMarks(newStudent.getMarks());
            return repository.save(oldStudent);
        }

        return null;
    }

    public String deleteStudent(Integer id) {
        repository.deleteById(id);
        return "Student deleted successfully";
    }
}