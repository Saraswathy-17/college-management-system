package com.example.springbootcms2.entity;

import jakarta.persistence.*;
import java.time.LocalDate;

@Entity
@Table(name = "cms_tch")
public class Employee {
	    @Id
	    @Column(name = "ID")
	    private int id;

	    @Column(name = "Name")
	    private String name;

	    @Column(name = "Age")
	    private int age;

	    @Column(name = "YOE")
	    private String yoe;

	    @Column(name = "DOJ")
	    private LocalDate doj;

	    @Column(name = "Salary1")  // IMPORTANT
	    private int salary1;

	    @Column(name = "salary")   // IMPORTANT
	    private int salary;

	    // getters and setters
	}