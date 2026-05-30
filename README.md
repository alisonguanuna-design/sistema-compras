# Sistema de Compras Web 🛒

Este es un sistema web básico para la gestión y administración de compras y productos, desarrollado con **PHP**, **MySQL (MariaDB)** y **CSS** para el diseño de la interfaz de usuario.

## 🚀 Características
El sistema implementa un CRUD completo que permite interactuar dinámicamente con los registros:
* **Visualización:** Listado de artículos en tiempo real.
* **Inserción:** Registro de nuevos productos con su precio y stock.
* **Edición y Eliminación:** Modificación y remoción de productos mediante identificadores únicos.
* **Procesamiento:** Módulo para la gestión y simulación de pagos.

## 🛠️ Tecnologías Utilizadas
* **Backend:** PHP 8.2
* **Base de Datos:** MySQL / MariaDB (Gestionado con phpMyAdmin)
* **Frontend:** HTML5 y CSS3

## 📋 Requisitos e Instalación

Para ejecutar este proyecto de forma local, necesitarás un servidor local como **XAMPP**.

1. **Clonar o descargar el proyecto:**
   Coloca la carpeta `sistema_compras` dentro del directorio de tu servidor local (por ejemplo, en `C:\xampp\htdocs\`).

2. **Configurar la Base de Datos:**
   * Abre **phpMyAdmin** en tu navegador (`http://localhost/phpmyadmin/`).
   * Crea una nueva base de datos llamada `compras`.
   * Ve a la pestaña **Importar**, selecciona el archivo `bd_compras.sql` que se encuentra en la raíz de este proyecto y haz clic en **Importar** o **Ejecutar**.

3. **Verificar la Conexión:**
   * Asegúrate de que las credenciales en el archivo `conexion.php` coincidan con la configuración de tu servidor local (por defecto en XAMPP: usuario `root` y sin contraseña).

4. **Ejecutar la Aplicación:**
   * Inicia los módulos de Apache y MySQL en el panel de XAMPP.
   * Accede desde tu navegador a: `http://localhost/sistema_compras/index.php`.
