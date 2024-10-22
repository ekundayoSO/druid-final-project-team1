# Druid-BCH Final Project

## Decoupled Drupal

## Tech Stack

### Getting Started

1. **Clone the repository**
   ```sh
   git clone https://github.com/ekundayoSO/druid-final-project-team1.git
   cd druid-final-project-team1
   ```

2. **Start the container**
   ```sh
   lando start
   ```

3. **Install Composer packages**
   ```sh
   lando composer install
   ```

4. **Import the database**
   Place `druid.sql` at the root of the project and run:
   ```sh
   lando db-import druid.sql
   ```

5. **Import configurations**
   ```sh
   lando drush cim
   ```


### Note
If you encounter an issue where another Lando instance with the same name exists, you should destroy the conflicting instance to avoid any conflicts. You can do this by running:

```sh
lando destroy
```

This command will completely destroy the existing instance, including any database or index information. If you want to avoid any prompts during the destruction process, you can use the `-y` flag:

```sh
lando destroy -y
```