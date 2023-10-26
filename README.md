# ProposalDetector

This is a Final Year Project (FYP) Proposal Detector project developed using Laravel Framework of PHP with MySQL database.

## Working

Here, you can store the data of FYP Proposals and then in future, you would be able to search for the one to check if exist in the database system or not.

## ERD (Entity Relationship Diagram)

<img src="images/ERD.png" alt="ERD" />

## Images

1. Home Page
<img src="images/Home.png" alt="HomePage" />
2. Proposals Page
<img src="images/Proposals.png" alt="ProposalsPage" />
3. Last Page of Proposals
<img src="images/Last Page.png" alt="LastPageOfProposals" />
4. Create Page
<img src="images/Create.png" alt="CreatePage" />
5. View Page
<img src="images/View.png" alt="ViewPage">
6. Edit Page
<img src="images/Edit.png" alt="EditPage">

## Attributes

<table>
    <thead>
        <th>Attribute</th>
        <th>Data Type</td>
    </thead>
    <tbody>
        <tr>
            <td>Title</td>
            <td>Short Text</td>
        </tr>
        <tr>
            <td>Category</td>
            <td>Short Text</td>
        </tr>
        <tr>
            <td>Tools</td>
            <td>Medium Text</td>
        </tr>
        <tr>
            <td>Tech Stack</td>
            <td>Long Text</td>
        </tr>
        <tr>
            <td>Description</td>
            <td>Long Text</td>
        </tr>
        <tr>
            <td>Supervisor Name</td>
            <td>Short Text</td>
        </tr>
        <tr>
            <td>Student Name</td>
            <td>Short Text</td>
        </tr>
        <tr>
            <td>Date</td>
            <td>Date</td>
        </tr>
        <tr>
            <td>Session</td>
            <td>Short Text</td>
        </tr>
        <tr>
            <td>Group Size</td>
            <td>Number</td>
        </tr>
    </tbody>
</table>

## Installation

1) Install **PHP**

2) Install **Composer**

3) $ ```composer install```

4) Make a database for this project.

5) copy-paste (duplicate) **.env.example** file, rename it to **.env** and configure it.

6) $ ```php artisan migrate```

7) $ ```php artisan serve```

8) Visit ```localhost:8000``` in browser or any other port you have configured to see the final result.

9) (Optional) Click on **GENERATE APP KEY** if displayed.

## Technologies

- Backend: **Laravel (PHP)**

- Frontend: **Blade**

- Databse: **MySQL**

- IDE: **Visual Studio (VS) Code**

- DB Server: **XAMPP**

- Package Manager: **Composer**

- VCS: **Git**