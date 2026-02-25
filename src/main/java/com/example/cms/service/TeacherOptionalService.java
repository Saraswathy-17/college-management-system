package com.example.cms.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class TeacherOptionalService {

    @Autowired(required = false)
    private OptionalAuditService optionalAuditService;

    public String performAction() {

        if (optionalAuditService != null) {
            optionalAuditService.log("Teacher action performed");
            return "Action performed with Audit logging";
        } else {
            return "Action performed WITHOUT Audit logging";
        }
    }
}