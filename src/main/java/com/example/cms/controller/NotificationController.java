package com.example.cms.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

import com.example.cms.service.NotificationService;

@RestController
public class NotificationController {

    @Autowired
    @Qualifier("emailService")   // Change to "smsService" to test SMS
    private NotificationService notificationService;

    @GetMapping("/notify")
    public String notifyUser() {
        notificationService.sendNotification("Teacher updated successfully!");
        return "Notification sent successfully!";
    }
}