<div align="center">
  <h1>Departmental Website: A Robust Solution for Department Management</h1>
  <a class="header-badge" target="_blank" href="https://www.linkedin.com/in/khatoonintech/">
  <img src="https://img.shields.io/badge/style--5eba00.svg?label=LinkedIn&logo=linkedin&style=social">
  </a>
  

<sub>Author:
<a href="https://www.linkedin.com/in/Khatoonintech/" target="_blank">Ayesha Noreen</a><br>
<small> <i>#KhatoonInTech CE' 27 @BZU |ByteWise Certified ML/DL Engineer|GSoC Contributor | SWEfellow: Confiniti. ,HeadStarterAI</i> </small>
</sub>
<br>
<br>
<br>

![portal ](../main/images/portal.png)

</div>

---

## Table of Contents
1. [Overview](#Overview)
2. [Key Objectives](#Key-Objectives)
1. [Technologies Used](#technologies-used)
2. [Project Structure](#project-structure)
3. [Installation](#installation)
4. [Environment Variables](#environment-variables)
5. [Features](#features)
    - [Visitor Portal](#visitor-portal)
    - [Student Portal](#student-portal)
    - [Faculty Portal](#faculty-portal)
    - [Admin Portal](#admin-portal)
    - [Future Work](#future-work)
7. [Contributors](#contributors)
8. [License](#license)

---
## Overview

The CPED Web Portal is a comprehensive system designed to streamline administrative, academic, and visitor interactions. It integrates multiple portals (Visitor, Student, Faculty, Admin, and a future Community Portal) to enhance engagement and management.

This project leverages the power of **Laravel** for backend development, combined with **MySQL** for database management and dynamic functionalities across multiple user portals.

## Key Objectives:
- Highlight departmental achievements.
- Share academic resources, events, and updates.
- Facilitate communication between students and faculty.

---

## Technologies Used

- **Frontend**: ![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)
![CSS](https://img.shields.io/badge/css-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![jQuery](https://img.shields.io/badge/jquery-%230769AD.svg?style=for-the-badge&logo=jquery&logoColor=white)

- **Backend**:![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)

- **Database**: ![MySQL](https://img.shields.io/badge/mysql-%234479A1.svg?style=for-the-badge&logo=mysql&logoColor=white)

- **Additional Libraries/Tools**: ![Google API](https://img.shields.io/badge/google--clientapi-%234285F4.svg?style=for-the-badge&logo=google&logoColor=white)
![Laravel DomPDF](https://img.shields.io/badge/barryvdh--laravel--dompdf-%23FF2D20.svg?style=for-the-badge&logoColor=white)


---

## Project Structure

```
CPED_Site/
app/
├── Http/
│   └── Controllers/
│       ├── Admin/
│       │   ├── AnnouncementController.php
│       │   ├── ContentController.php
│       │   ├── DataController.php
│       │   └── FeeChallanController.php
│       ├── Authentication/
│       │   ├── AdminAuthController.php
│       │   ├── FacultyAuthController.php
│       │   ├── PortalLoginController.php
│       │   ├── StudentAuthController.php
│       │   └── VisitorAuthController.php
│       ├── Faculty/
│       │   ├── FacultyResultController.php
│       │   └── Student/
│       │       ├── ResultController.php
│       │── Controller.php
│       │── FacultyMembers.php
│       └── Models/
│           ├── Admin.php
│           ├── Community.php
│           ├── Content.php
│           ├── EditRequest.php
│           ├── Faculty.php
│           ├── FeeChallam.php
│           ├── ResultAnnouncement.php
│           ├── Student.php
│           ├── User.php
│           └── Visitors.php
└── Providers/
├── bootstrap/
├── config/
database/
├── factories/
├── migrations/
│   ├── 0001_01_01_000000_create_users_table.php
│   ├── 0001_01_01_000001_create_cache_table.php
│   ├── 0001_01_01_000002_create_jobs_table.php
│   ├── 2024_11_23_145903_create_faculty_table.php
│   ├── 2024_11_30_101652_create_visitors_table.php
│   ├── 2024_12_03_064811_create_student_table.php
│   ├── 2024_12_04_180618_create_result_announcement_table.php
│   ├── 2024_12_12_144215_create_content_table.php
│   └── 2024_12_15_100745_create_challan_table.php
└── seeders/
    ├── ChallanTableSeeder.php
    ├── ContentTableSeeder.php
    ├── DatabaseSeeder.php
    ├── FacultyTableSeeder.php
    └── StudentTableSeeder.php
├── public/
├── resources/
│   ├── views/
│   │   ├── visitorOnly/
│   │   │   ├── university/
│   │   │   │   └── aboutuni.blade.php
│   │   │   ├── department/
│   │   │   │   ├── aboutCPE.blade.php
│   │   │   │   ├── adminInfo.blade.php
│   │   │   │   ├── facultyinfo.blade.php
│   │   │   │   ├── admSchedule.blade.php
│   │   │   │   ├── semSchedule.blade.php
│   │   │   │   ├── depVision.blade.php
│   │   │   │   └── programs.blade.php
│   │   ├── admin/
│   │   │   ├── ADM_viewData.blade.php
│   │   │   ├── editContent.blade.php
│   │   │   ├── FAC_viewData.blade.php
│   │   │   ├── feeManagement.blade.php
│   │   │   ├── liveannouncements.blade.php
│   │   │   ├── pendingannouncements.blade.php
│   │   │   ├── profile.blade.php
│   │   │   ├── STD_viewData.blade.php
│   │   │   ├── viewData.blade.php
│   │   │   ├── VIS_viewData.blade.php
│   │   ├── faculty/
│   │   │   ├── announcement.php
│   │   │   ├── notifications.blade.php
│   │   │   ├── profile.blade.php
│   │   │   ├── results.blade.php
│   │   ├── layouts/
│   │   │   ├── adminProfilelayout.blade.php
│   │   │   ├── adminSidebarlayout.blade.php
│   │   │   ├── app.blade.php
│   │   │   ├── DataViewlayout.blade.php
│   │   │   ├── facultyinfolayout.blade.php
│   │   │   ├── FacultySidebar.blade.php
│   │   │   ├── footer.blade.php
│   │   │   ├── header.blade.php
│   │   │   ├── landingpage.blade.php
│   │   │   ├── portalLayout.blade.php
│   │   │   ├── studentprofileLayout.blade.php
│   │   ├── student/
│   │   │   ├── feeRecord.blade.php
│   │   │   ├── profile.blade.php
│   │   │   ├── result1.blade.php
│   │   │   ├── result2.blade.php
├── routes/
├── storage/
└── tests/


```

---

## Key Directories:

1. **`app/`**: Contains the core application code
   - `Http/Controllers/`: All controller classes organized by functionality
   - `Models/`: Database models for different entities

2. **`database/`**: Database-related files
   - `migrations/`: Database table structures
   - `seeders/`: Initial data seeders

3. **`resources/views/`**: Blade template files
   - `visitorOnly/`: Public-facing pages
   - `admin/`: Administrator dashboard views
   - `faculty/`: Faculty portal views
   - `student/`: Student portal views
   - `layouts/`: Reusable layout templates


![portal ](../main/images/project_structure.png)
---
## Features

## Visitor Portal

The Visitor Portal serves as an essential gateway for prospective students, parents, and other visitors interested in learning more about the university and its offerings. This portal features several dynamic pages that are easily editable through the Admin Portal, ensuring that the information remains current and relevant. 


1. **Home**:                      `resources/views/welcome.blade.php`


This page provides a comprehensive overview of the university and its various departments. It showcases the latest updates, achievements, and events, creating a welcoming atmosphere for visitors. The Home page is designed to highlight key aspects of the university's mission and vision, featuring engaging visuals and testimonials from current students and alumni to inspire prospective students.
![Home](../main/images/home.gif)

2.  **About Department**:     `resources/views/visitorOnly/department/aboutCPE.blade.php`

This section delves into the rich history of the department of Computer Engineering, detailing its founding principles, mission statement, and significant milestones achieved over the years. Visitors can learn about the department's commitment to academic excellence, research initiatives, community engagement, and its role in shaping future leaders. This page aims to foster a sense of pride and connection among visitors by showcasing the institution's legacy.
![About CPE](../main/images/aboutCPE.gif)

 
3. **About University**:         `resources/views/visitorOnly/university/aboutuni.blade.php`

This section delves into the rich history of the university, detailing its founding principles, mission statement, and significant milestones achieved over the years. Visitors can learn about the university's commitment to academic excellence, research initiatives, community engagement, and its role in shaping future leaders. This page aims to foster a sense of pride and connection among visitors by showcasing the institution's legacy.
![About University](../main/images/aboutUni.gif)

4. **Departmental Vision and Mission**:     `resources/views/visitorOnly/department/depVision.blade.php`

 This section articulates the goals and aspirations of each department within the university. It outlines how each department aligns with the overall mission of the university while emphasizing its unique contributions to education and research. By sharing this vision with visitors, the university aims to attract like-minded individuals who resonate with its educational philosophy.

![Departmental Vision and Mission](../main/images/dep-vision-mission.gif)
5. **Programs Offered**:     `resources/views/visitorOnly/department/programs.blade.php`

 This page provides a comprehensive list of all programs and courses available within each department. Each program description includes details such as curriculum structure, learning outcomes, career opportunities for graduates, and any special features like internships or study abroad options. This information helps prospective students make informed decisions about their educational paths.
 ![Programs Offered](../main/images/Programs.gif)

6. **Administration**:   `resources/views/visitorOnly/department/adminInfo.blade.php`

This page provides comprehensive administrative information that is crucial for visitors seeking assistance or guidance. It includes contact details for key administrative personnel, office hours for various departments, and an organizational chart that outlines the structure of the university's administration. This transparency helps visitors navigate the institution more effectively and find the resources they need.
![Administration](../main/images/admininfo.gif)
 
7. **Faculty**:      `resources/views/visitorOnly/department/facultyinfo.blade.php`

On this page, visitors can explore detailed profiles of faculty members across various departments. Each profile includes biographies that highlight academic qualifications, areas of expertise, research interests, and contributions to their respective fields. Additionally, contact information is provided so that prospective students can reach out to faculty for guidance or inquiries about specific programs.
![Faculty Info](../main/images/facultyinfo.gif)

8. **Admission Schedule**:     `resources/views/visitorOnly/department/admSchedule.blade.php`


This page outlines the admission timeline for prospective students, detailing key dates such as application deadlines, entrance exam schedules, interview dates, and orientation sessions. By providing this information clearly and concisely, the university ensures that applicants are well-informed about the steps they need to take to join the institution.
![Admission Schedule](../main/images/AdmSchedule.gif)

9. **Semester Schedule**:     `resources/views/visitorOnly/department/semSchedule.blade.php`

 The Semester Schedule page offers a detailed calendar of academic activities throughout the semester. It includes important dates such as class start dates, examination periods, holidays, and special events hosted by the university. This resource is vital for both prospective students planning their academic journey and current students managing their schedules.
![Semester Schedule](../main/images/semSchedule.gif)


## Student Portal

The Student Portal is designed specifically for enrolled students to manage their academic journey effectively and access essential resources tailored to their needs.

- **Profile**:  Students can view and edit their personal information within their profiles, which includes details such as name, contact information, enrolled courses, and academic performance records. This feature allows students to keep their information up-to-date and ensures that they receive important communications from faculty and administration.
 ![Profile](../main/images/studentProfile.gif)

- **Announcements**: Provides access to official announcements from faculty or administration regarding updates such as class schedule changes, exam notifications, or upcoming events. This centralized feature helps students stay informed about critical information affecting their studies.

  ![Announcements](../main/images/studentAnnouncement.gif)

- **Grading and Evaluation**: Allows students to review their grades for quizzes, assignments, midterms, finals, and overall course evaluations. They can also access feedback from instructors to improve in future assessments.

  ![Grading and Evaluation](../main/images/studentResult.gif)

- **Fee Record**: Enables students to check their fee submission history and view details about past payments. Students can also upload relevant transcripts necessary for fee clearance processes.

  ![Fee Record](../main/images/studentFee.gif)

## Faculty Portal

The Faculty Portal equips faculty members with tools necessary for managing their responsibilities effectively while fostering communication with both administration and students.

- **Profile**: Faculty members can view and edit their personal profiles, including contact information, designation (e.g., Professor or Lecturer), areas of expertise, and office hours when students can seek assistance.

  ![facultyProfile](../main/images/facultyProfile.gif)

- **Notification**: Faculty members receive important notifications from administration regarding critical tasks such as result submissions or policy changes affecting teaching practices.

    ![Notification](../main/images/facNotifications.gif)

- **Announcements**: Faculty have access to official announcements from both administration and department heads about policy changes or upcoming meetings. This feature maintains clear communication channels within the faculty community.

    ![Announcements](../main/images/FACannouncement.gif)

- **Grading and Evaluation**: Faculty can efficiently upload student results for midterms, finals, and quizzes, ensuring timely feedback on student performance.

    ![Grading and Evaluation](../main/images/FACresult.gif)


## Admin Portal

The Admin Portal serves as a powerful tool for administrators to manage all aspects of university operations efficiently while maintaining oversight over various functions within each portal.

- **Profile**: Administrators can view and edit their personal information and credentials necessary for accessing system functionalities.

    ![Profile](../main/images/adminProfile.gif)

- **Edit Website**: Administrators can dynamically modify content on visitor pages without requiring code changes. This ensures that public-facing information remains accurate and up-to-date.
 
    ![Edit Website](../main/images/editwebsite.gif)

- **Announcements**: Administrators can create, edit, or delete announcements before publishing them across various portals to ensure timely communication with faculty and students.
  
    ![Announcements](../main/images/adminAnnouncement.gif)

- **Finance Management**: Allows administrators to generate, delete, view, and verify fee challans for students. This feature upholds accurate financial record-keeping practices for student fees.

  ![Finance Management](../main/images/adminFee.gif)

  
- **Data Management**: Provides comprehensive capabilities for managing data related to visitors, enrolled students, faculty members, and admin staff. This ensures accurate records are maintained across all systems involved in daily operations.

    ![Data Management](../main/images/adminData.gif)

- An admin can **dismiss** another admin as below:
  
    ![Data Management](../main/images/adminDismissal.gif)

  - An admin can **appoint** another faculty member as admin as below:
  
    ![Data Management](../main/images/adminAppoint.gif)

---

## Installation

### Prerequisites
- PHP and Composer installed on your system
- Node.js and npm installed
- MySQL database

### Steps to Clone the Project

1. Clone the repository:
   ```bash
   git clone https://github.com/KhatoonInTech/CPED_Site.git
   ```
2. Navigate to the project directory:
   ```bash
   cd CPED_Site
   ```

### Steps to Create the Project

1. Install PHP dependencies:
   ```bash
   composer install
   ```
2. Install JavaScript dependencies:
   ```bash
   npm install
   ```
3. Set up the `.env` file:
   ```bash
   cp .env.example .env
   ```
   Update the `.env` file with your database credentials and the following API keys:
   ```env
   # LinkedIn API for authentication
    LINKEDIN_CLIENT_ID=<YOUR_LINKEDIN_CLIENT_ID>
    LINKEDIN_CLIENT_SECRET=<YOUR_LINKEDIN_CLIENT_SECRET>
    LINKEDIN_REDIRECT_URI=<YOUR_LINKEDIN_REDIRECT_URI>
    LINKEDIN_SCOPE=<YOUR_LINKEDIN_SCOPE>
    LINKEDIN_ACCESS_TOKEN=<YOUR_LINKEDIN_ACCESS_TOKEN>
    
    # Google APIs for authentication
    GOOGLE_CLIENT_ID=<YOUR_GOOGLE_CLIENT_ID>
    GOOGLE_CLIENT_SECRET=<YOUR_GOOGLE_CLIENT_SECRET>
    GOOGLE_REDIRECT_URI=<YOUR_GOOGLE_REDIRECT_URI>
   ```
4. Generate the application key:
   ```bash
   php artisan key:generate
   ```
5. Run migrations:
   ```bash
   php artisan migrate
   ```
6. Start the development server:
   ```bash
   php artisan serve
   ```
7. Open your browser and navigate to `http://127.0.0.1:8000`.

---

## Usage

1. Update content in relevant folders as needed (e.g., faculty profiles, news, events).
2. Deploy the site using your preferred hosting service (e.g., AWS, Heroku).
3. Regularly update dependencies and content to keep the site current.

---

## Future Work
- **Community Portal**: A planned addition where community members can:
  - Share information about their community.
  - Create announcements for upcoming events or sessions.
  - Facilitate collaborations between students and faculty.

## Contributing

We welcome contributions from the community! To contribute:

1. Fork the repository.
2. Create a new branch for your feature:
   ```bash
   git checkout -b feature-name
   ```
3. Commit your changes and push to your fork.
4. Submit a pull request detailing your changes.

---

## License

This project is licensed under the [MIT License](LICENSE).


---

<div align="center">
<h3>For any query/help ,please contact our developer:</h3>  
Developer : <a href="https://www.linkedin.com/in/Khatoonintech/" target="_blank">Ayesha Noreen</a><br>
   <small> ByteWise Certified ML/DL Engineer|GSoC Contributor | SWEfellow: Confiniti. ,HeadStarterAI </small>
<br> <a href="https://www.github.com/Khatoonintech/" target="_blank"> Don't forget to ⭐ our repo </a><br>


</div>
