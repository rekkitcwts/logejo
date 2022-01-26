/* Users Table
 * rev 1.0
 */

CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(25) NOT NULL,
    created TIMESTAMP,
    modified TIMESTAMP,
    is_active INTEGER DEFAULT 1 NOT NULL
);

/* List of default users
 *
 */
INSERT INTO users (username, password, role, created, modified)
VALUES
('admin', 'verdastelo', 'int_admin', NOW(), NOW());
