# Project Overview

## Technologies
- **Framework**: Laravel
- **Database**: MySQL

---

### Table Name: Cats

**Fields:**
1. **id**: Integer, Primary Key, Auto Increment
2. **name**: String, Not Null
3. **dob**: Date, Not Null (Date of Birth)
4. **owner_name**: String, Not Null

---

# API Documentation

## Retrieve All Cats

### Endpoint URL
`GET /api/cats`

### HTTP Method
`GET`

### Request Parameters
None

### Response Format
**Success Response (200 OK):**
```json
[
    {
        "id": 1,
        "name": "Whiskers",
        "dob": "2020-05-01",
        "owner_name": "John Doe"
    },
    {
        "id": 2,
        "name": "Paws",
        "dob": "2019-07-11",
        "owner_name": "Jane Smith"
    }
]
```

## Add a New Cat

### Endpoint URL
`POST /api/cats`

### HTTP Method
`POST`

### Request Parameters
**Request Body (JSON):**
```json
{
    "name": "Whiskers",
    "dob": "2020-05-01",
    "owner_name": "John Doe"
}
```

### Response Format
**Success Response (201 Created):**
message: 'Cat successfully created!'
```json
[
    {
        "id": 2,
        "name": "Paws",
        "dob": "2019-07-11",
        "owner_name": "Jane Smith"
    }
]
```

**Error Response (500 Internal Server Error):**
```json
{
    "error": "Failed to create cat."
}
```

### Endpoint URL
`GET /api/cats/create`

### Controller Method
`CatsController@create`

### Route Name
`cats.create`

## Description
This route handles the GET request to retrieve a view with a form and submitting that form with a new cat into the MySQL database (cats table).

## Usage
Navigate to `/api/cats/create` to access the functionality associated with creating a new cat.

### Request Parameters
1. **name**: String, Not Null
2. **dob**: Date, Not Null (Date of Birth), Must be in the form of YYYY-MM-DD
3. **owner_name**: String, Not Null

### Response Format
**Success Response**
A form will be displayed with fields that need to be filled in.

If the details are in the incorrect format an appropriate error message will be displayed.
e.g. The name field needs to be filled