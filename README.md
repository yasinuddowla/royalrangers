# Royal Rangers Cricket Team Management System

A Laravel 12 application for managing cricket team members with both public-facing and admin-protected sections.

## Features

### Public Features
- **Home Page**: Displays team name "Royal Rangers" and list of team members
- **Team Member Cards**: Shows player photos, names, jersey numbers, and contact links
- **Contact Integration**: Direct links to WhatsApp and Facebook for each team member
- **CricHeroes Integration**: Links to player profiles on CricHeroes platform

### Admin Features
- **Secure Authentication**: Admin panel protected by username/password authentication
- **Team Member Management**: Full CRUD operations for team members
- **Player Information Fields**:
  - Full Name
  - Jersey Name
  - Jersey Size (XS, S, M, L, XL, XXL, XXXL)
  - Trouser Size (28, 30, 32, 34, 36, 38, 40, 42, 44)
  - Jersey Number (unique)
  - Photo upload
  - WhatsApp Link
  - Facebook Link
  - CricHeroes Profile Link

## Technology Stack

- **Framework**: Laravel 12
- **Styling**: Tailwind CSS
- **Database**: SQLite
- **Authentication**: Laravel Breeze
- **Image Storage**: Local storage in `public` directory

## Installation & Setup

1. **Clone the repository** (if not already done)
2. **Install dependencies**:
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database setup**:
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

5. **Build assets**:
   ```bash
   npm run build
   ```

6. **Start the development server**:
   ```bash
   php artisan serve
   ```

## Default Admin Credentials

- **Email**: admin@royalrangers.com
- **Password**: password123

## Usage

### Public Access
- Visit `http://localhost:8000` to view the public team page
- Browse team members and their contact information
- Click on individual team members for detailed view

### Admin Access
- Visit `http://localhost:8000/login` to access the admin panel
- Use the default credentials above to log in
- Access the admin dashboard at `http://localhost:8000/admin/dashboard`
- Manage team members at `http://localhost:8000/admin/team-members`

## File Structure

```
app/
├── Http/Controllers/
│   ├── AdminController.php          # Admin dashboard and team management
│   └── TeamMemberController.php     # CRUD operations for team members
├── Models/
│   └── TeamMember.php              # Team member model
database/
├── migrations/
│   └── create_team_members_table.php
└── seeders/
    └── AdminUserSeeder.php         # Creates default admin user
resources/views/
├── team-members/                   # Public views
│   ├── index.blade.php            # Home page with team list
│   └── show.blade.php             # Individual team member details
├── admin/                          # Admin views
│   ├── dashboard.blade.php        # Admin dashboard
│   └── team-members/              # Admin team member management
│       ├── index.blade.php        # Team members list
│       ├── create.blade.php       # Add new team member
│       └── edit.blade.php         # Edit team member
routes/
└── web.php                        # Application routes
```

## Routes

### Public Routes
- `GET /` - Home page (team members list)
- `GET /team-members/{teamMember}` - Individual team member details

### Admin Routes (Protected)
- `GET /admin/dashboard` - Admin dashboard
- `GET /admin/team-members` - Team members management
- `GET /admin/team-members/create` - Add new team member
- `POST /admin/team-members` - Store new team member
- `GET /admin/team-members/{teamMember}/edit` - Edit team member
- `PUT /admin/team-members/{teamMember}` - Update team member
- `DELETE /admin/team-members/{teamMember}` - Delete team member

## Database Schema

### team_members table
- `id` - Primary key
- `full_name` - Player's full name
- `jersey_name` - Name displayed on jersey
- `jersey_size` - Jersey size
- `trouser_size` - Trouser size
- `jersey_number` - Unique jersey number
- `photo` - Path to uploaded photo (nullable)
- `whatsapp_link` - WhatsApp contact link (nullable)
- `facebook_link` - Facebook profile link (nullable)
- `cricheroes_profile_link` - CricHeroes profile link (nullable)
- `created_at` - Timestamp
- `updated_at` - Timestamp

## Customization

### Adding New Team Members
1. Log in to the admin panel
2. Navigate to "Team Members Management"
3. Click "Add New Member"
4. Fill in the required information
5. Upload a photo (optional)
6. Add contact links (optional)
7. Save the team member

### Modifying Team Information
- Edit team name in the Blade templates
- Update styling in the Tailwind CSS classes
- Modify form fields in the admin views

## Security Features

- Authentication required for admin access
- CSRF protection on all forms
- File upload validation for images
- Input validation and sanitization
- Secure password hashing

## Development

### Running Tests
```bash
php artisan test
```

### Code Style
```bash
./vendor/bin/pint
```

### Asset Compilation
```bash
npm run dev    # Development with hot reload
npm run build  # Production build
```

## Support

For any issues or questions, please refer to the Laravel documentation or create an issue in the project repository.
