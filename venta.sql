CREATE TABLE productos (
    idProd SERIAL PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    existencia INT NOT NULL
);
