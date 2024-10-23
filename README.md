# Druid-BCH Final Project

## Decoupled Drupal

## Tech Stack

### Getting Started

**Clone the repository**
```sh
git clone https://github.com/ekundayoSO/druid-final-project-team1.git
cd druid-final-project-team1
```

#### Client Side Setup with React Vite

1. **Navigate to the client directory**
   ```sh
   cd client
   ```

2. **Install npm packages**
   ```sh
   npm install
   ```

3. **Run the development server**
   ```sh
   npm run dev
   ```

#### Server Side Setup with Drupal

1. **Navigate to the server directory**
   ```sh
   cd server
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

   4. **Export the database**
   Share the exported database with the team members
   ```sh
   lando db-export druid.sql
   ```

5. **Export configurations**
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


## Branching Strategy

We use a feature-branch workflow. The `main` branch is the main codebase. All feature branches are created from `main` and merged back into `main` via pull requests.

Branch names should follow this format: `feature/BE-FeatureName` or `feature/FE-FeatureName` for backend and frontend tasks respectively. The feature name corresponds to the issue in Trello.

## Working with Branches

1. Ensure you're in the `main` branch and it's up-to-date with the remote `main` branch:
    ```bash
    git checkout main
    git pull origin main
    ```

2. Create a new branch for your feature:
    ```bash
    git checkout -b feature/BE-FeatureName
    ```

3. Make changes and commit them:
    ```bash
    git add .
    git commit -m "Add a good description for commit message here"
    ```

4. Push your branch to the remote repository:
    ```bash
    git push origin feature/BE-FeatureName
    ```

## Pull Requests

When your feature is complete and tested, open a pull request against the `main` branch. 

1. Go to the repository on GitHub and click on "Pull requests".
2. Click on "New pull request".
3. Select your feature branch from the dropdown menu.
4. Write a descriptive title and comment for your pull request.
5. Click on "Create pull request".

Please ensure your code passes all checks and has no merge conflicts before requesting a review.

## Code Reviews

All pull requests should be reviewed by at least one other developer. Don't merge your own pull request.

## Merging

Once your pull request has been reviewed and approved, you can merge it into `main`. Always use the "Squash and merge" option on GitHub to keep the commit history clean.

After merging, don't forget to pull the latest changes from `main` on your local machine:

```bash
git checkout main
git pull origin main
```

Then you can delete your feature branch:
```bash
git branch -d feature/BE-FeatureName
```