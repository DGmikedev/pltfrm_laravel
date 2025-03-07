use std::env;
use std::process::Command;
use std::process::exit;
use chrono::Utc;

fn main() {

    let query: String = String::from("    
    SELECT JSON_OBJECT(
        \"id\", id,
        \"created_at\", created_at,
        \"updated_at\", updated_at,
        \"id_companie\", id_companie,
        \"zone\", zone,
        \"edo\", edo,
        \"name\", name,
        \"address\", address,
        \"deptos\", deptos,
        \"sells_gral\", sells_gral,
        \"average_mont\", average_mont ) as ''
         FROM pltfrm_laravel.tiendas; ");


    let commando = Command::new("mysql")
    .arg("-u")
    .arg("root")
    .arg("-e")
    .arg(query)
    .output()
    .expect("Falló al ejecutar el comando");

    // success?
    if commando.status.success() {
        // Si la ejecución fue exitosa, mostramos la salida
        println!("{}", String::from_utf8_lossy(&commando.stdout));
    } else {
        // Si ocurrió un error, mostramos el error
        eprintln!("Error al ejecutar el comando MySQL:");
        eprintln!("{}", String::from_utf8_lossy(&commando.stderr));
        exit(1); // Salir con código de error 1
    }

   //  let args: Vec<_> = env::args().collect();
   //  for i in args.iter(){ println!("{i:?}") }


    let today = Utc::now().date();
    // Formatear la fecha en el formato ISO 8601 (YYYY-MM-DD)
    let fecha = today.format("%Y-%m-%d").to_string();
    

   // println!("{}", fecha);

}

// QUERYS

    /*
    let query: String = String::from("    
        INSERT INTO pltfrm_laravel.tiendas (id, created_at, updated_at, id_companie, `zone`, edo, name, address, deptos, sells_gral, average_mont)VALUES
        (10,'2024-12-02', '2025-01-05', 101, 1, 1, 'Tienda Norte', 'Calle Norte 150, Zócalo',                     '{\"horario\": \"10:00-18:00\", \"ofertas\": [\"descuento 80%\", \"envío gratuito\"]}', 150500.20, 1500.20),
        (11,'2024-11-25', '2025-01-10', 50, 200, 1, 'Tienda Sur', 'Calle Sur 200, Centro',                            '{\"horario\": \"09:00-19:00\", \"ofertas\": [\"descuento 50%\", \"compra uno y lleva otro gratis\"]}', 50000.99, 500.99),
        (12,'2024-10-15', '2025-02-01', 80, 300, 1, 'ElectroMax', 'Avenida Central 350, Zona Comercial',              '{\"horario\": \"11:00-21:00\", \"ofertas\": [\"descuento 20%\", \"envío gratuito en compras mayores a $1000\"]}', 120000.00, 200.50),
        (13, '2024-09-10', '2025-03-05', 200, 500, 0, 'Ropa y Más', 'Calle de la Paz 400, Ciudad Nueva',               '{\"horario\": \"10:00-18:00\", \"ofertas\": [\"descuento 10%\", \"envío 50% off\"]}', 95000.75, 120.00),
        (14, '2024-08-20', '2025-04-10', 35, 150, 1, 'Juguetería El Mundo', 'Calle Mayor 250, Colonia Este',           '{\"horario\": \"10:00-19:00\", \"ofertas\": [\"descuento 15%\", \"compra 2 y llévate otro gratis\"]}', 23000.45, 300.99),
        (15, '2024-07-30', '2025-05-15', 60, 250, 1, 'Tecnología Pro', 'Avenida Reforma 150, Edificio A',              '{\"horario\": \"09:00-20:00\", \"ofertas\": [\"descuento 25%\", \"envío gratuito\"]}', 80000.00, 150.00),
        (16, '2024-06-25', '2025-06-10', 120, 400, 0, 'Deportes y Más', 'Calle del Sol 500, Parque Industrial',        '{\"horario\": \"08:00-20:00\", \"ofertas\": [\"descuento 5%\",  \"20% extra en productos de temporada\"]}', 45000.25, 500.00),
        (17, '2024-05-15', '2025-07-01', 75, 350, 1, 'Supermercado El Buen Sabor', 'Calle Larga 125, Mercado Central', '{\"horario\": \"07:00-23:00\", \"ofertas\": [\"descuento 30%\", \"oferta especial en productos locales\"]}', 350000.50, 800.00),
        (18, '2024-04-10', '2025-07-15', 15, 100, 1, 'Tienda Online', 'No Aplica Dirección, Online',                   '{\"horario\": \"24/7\",        \"ofertas\": [\"descuento 50%\", \"envío gratis en compras mayores a $500\"]}', 120000.00, 100.00),
        (19, '2024-03-01', '2025-08-01', 90, 450, 1, 'Fabrica de Calzado', 'Calle Zapatos 50, Barrio Obrero',          '{\"horario\": \"10:00-18:00\", \"ofertas\": [\"descuento 40%\", \"compra uno y llévate el segundo a mitad de precio\"]}', 70000.40, 400.00);
    "); 
*/

// C:\Program Files\MariaDB 11.3\bin\mysql.exe
// mysql -u root -e "SELECT * FROM  local.migrations;"