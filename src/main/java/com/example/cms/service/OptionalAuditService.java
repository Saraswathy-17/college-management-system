package com.example.cms.service;

import org.springframework.stereotype.Component;

@Component
public class OptionalAuditService {

    public void log(String message) {
        System.out.println("AUDIT LOG: " + message);
    }
}