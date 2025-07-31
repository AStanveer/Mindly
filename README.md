# Website Overview: Mindly – Mental Health Self-Assessment System

### **User Role: Student Only**

This version focuses exclusively on student functionality—no admin panel. Students can register, log in, take the DASS-21 assessment, view results, and receive personalized recommendations. All CRUD operations are scoped to the individual student’s own data.

---

### 🔐 **1. User Authentication Pages**

- **Registration Page**
    - Fields: Full name, UTM email, password, confirm password
    - Validation: Email format (UTM), password rules
    - Extras: PDPA consent checkbox (required before account creation)
- **Login Page**
    - Fields: Email, password
    - Options: “Remember Me” checkbox
    - Link: “Forgot Password?”
    - Extras: OTP validation
- **Password Reset Page**
    - Feature: Enter email to receive a reset link (or security question fallback)

---

### 🏠 **2. Student Dashboard (Home Page)**

- **Welcome Message** with student’s name
- **Last Assessment Date**
- **Call to Action**: “Start Mental Health Quiz”
- **Quick Results Summary**: Depression, Anxiety, Stress levels from last quiz
- **Personalized Recommendations Preview**

---

### 📋 **3. DASS-21 Assessment Page**

- **PDPA Consent Reminder** before quiz begins
- **21 Questions** (Likert scale: 0–3)
- **Validation**: All questions must be answered
- **Auto-Save** to prevent accidental data loss

---

### 📊 **4. Results Page**

- **Score Breakdown**: Depression / Anxiety / Stress
- **Severity Levels**: Auto-classified (Normal to Extremely Severe)
- **Interpretations**: Short paragraph explaining each score category
- **Smart Suggestions**:
    - “Retake Assessment”
    - “View Personalized Tips”

---

### 💡 **5. Recommendations Page**

- **Generated Tips** based on score ranges
- **Self-Care Activities** tailored for each category (D / A / S)
- **Bookmark**: Save helpful content to profile
- **Mark as Done**: Track completed strategies

---

### 👤 **6. Profile Page**

- **Basic Info**: Name, email (editable)
- **Change Password**
- **Assessment History Log**: Date + score summary
- **Delete Account** (with confirmation modal)

---

### 📅 **7. Assessment History Page**

- **Log of All Submissions** with timestamp
- **Score Comparison**: View changes over time

---

### Screenshots of features 

<img width="584" height="607" alt="Screenshot 2025-07-31 at 7 23 32 PM" src="https://github.com/user-attachments/assets/9b4d8e1a-e3c4-4caa-a942-f95e75cf5c30" />

<img width="581" height="621" alt="Screenshot 2025-07-31 at 7 24 23 PM" src="https://github.com/user-attachments/assets/bdbbd112-6c14-48d9-ac0f-2c1644209228" />

