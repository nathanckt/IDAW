ENDPOINTS

-> GET /users.php

Corps (JSON) : Vide

Réponse (JSON) : 
    {
        "id": 1,
        "name": "John Doe",
        "email": "john.doe@example.com"
    },
    {
        "id": 2,
        "name": "Jane Smith",
        "email": "jane.smith@example.com"
    }


-> POST /users.php

Corps (JSON) :
    {
        "name": "Alice Johnson",
        "email": "alice.johnson@example.com"
    }

Réponse (JSON) (201 Created) : 
    {
        "id": 3,
        "name": "Alice Johnson",
        "email": "alice.johnson@example.com"
    }


-> PUT /users.php

Corps (JSON) :
    {
        "name": "Léa-Line Saad",
        "email": "lélé.saad@youhou.com"
    }

Réponse (JSON) (201 Updated) : 
    {
        "id": 3,
        "name": "Léa-Line Saad",
        "email": "lélé.saad@youhou.com"
    }


-> DELETE /users.php

Corps (JSON) :
    {
        "id" : 3
    }

Réponse (JSON) (201 Updated) : 
    {
        "id": 1,
        "name": "John Doe",
        "email": "john.doe@example.com"
    },
    {
        "id": 2,
        "name": "Jane Smith",
        "email": "jane.smith@example.com"
    }

