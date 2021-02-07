insert into users (
    login,
    password,
    email,
    created_at
)
value (
    "admin",
    "$2y$10$n5UvFxZcFC6pjD6zuKxwzOoR79V3jlkSBUz3qw2luAzJgphg.7afm", --  admin
    "admin@monsite.com",
    now()
);