/* Users Table
 * rev 1.0
 * Roles: int_admin, ext_user (more to come)
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

/* Flats (US Eng: Apartments) Table
 * rev 1.0
 * Flat types: co-ed (default), maleonly, femaleonly
 * LGBT-Friendly: -1 (not specified), 0 (no), 1 (yes) - only 1 is used in Somhairle (TBD)
 */

CREATE TABLE flats (
	id SERIAL PRIMARY KEY,
	flatname VARCHAR(255) NOT NULL,
	flattype VARCHAR(255) NOT NULL,
	flatlat DOUBLE PRECISION NOT NULL,
	flatlng DOUBLE PRECISION NOT NULL,
	flatlgbt INTEGER DEFAULT -1 NOT NULL,
	created TIMESTAMP,
    modified TIMESTAMP,
    is_active INTEGER DEFAULT 1 NOT NULL
);

/* List of Default Flats
 *
 */
INSERT INTO flats (flatname, flattype, flatlat, flatlng, created, modified)
VALUES
('Valhalla','co-ed',7.096445, 125.633636, NOW(), NOW()),
('Capybara Sa Fatima','co-ed',7.093640, 125.637134, NOW(), NOW()),
('Hiro-kun to Okusan Itsumo Ronzuru','co-ed',7.088554, 125.635406, NOW(), NOW()),
('An Phoreseo agus Am Konsumisyon','co-ed',7.089363, 125.637817, NOW(), NOW());
