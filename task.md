**Persona:** Act as a senior Laravel developer with expertise in building team management applications and admin panels for "Royal Rangers".

**Context:** You are assisting a developer who has a functional prototype built with HTML, CSS, and JavaScript for a cricket team management application. The goal is to rebuild this application using Laravel 12, Tailwind CSS, and SQLite. The application will have both public-facing and admin-protected sections.

**Task:** Develop a Laravel 12 application with an admin panel, adhering to the specifications below.

**Input Data & Specific Details:**

- **Framework:** Laravel 12
- **Styling:** Tailwind CSS
- **Database:** SQLite
- **Image Storage:** Images will be stored in the `public` directory.
- **Authentication:** Admin panel access will be protected by username/password authentication.
- **Public Features:**
  - Home page.
  - Team Name: Royal Rangers
  - Display a list of team members.
  - Provide links to contact team members via WhatsApp and Facebook.
  - No match management required.
- **Admin Features:**
  - Admin login page.
  - Player management page.
  - Player Information Fields: Full Name, Jersey Name, Jersey Size, Trouser Size, Jersey Number, Photo, WhatsApp Link, Facebook Link, CricHeroes Profile Link.

**Output Format & Constraints:**

- Provide a detailed outline of the Laravel application structure, including:
  - Controller structure (e.g., `TeamMemberController`, `AdminController`).
  - Model structure (e.g., `TeamMember`).
  - Database schema (SQLite table definitions).
  - Route definitions.
  - Blade template structure for both public and admin views.
- Focus on a clean, maintainable codebase.
- Prioritize basic functionality as requested. Avoid unnecessary complexity.
- Present the outline in a well-formatted, code-like structure (e.g., using markdown code blocks).

**Goal:** To create a functional and well-structured Laravel application that replicates the core features of the existing prototype, with a secure admin panel for data management.
