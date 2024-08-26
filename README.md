Here's a document that includes all the necessary information about your project:

---

# Music Playlist Management System (MPMS)

## Project Overview

The Music Playlist Management System (MPMS) is a web application that allows users to create, manage, and share music playlists. It is built using React.js for the frontend and Node.js with Express for the backend, with integration to the Spotify API for music management.

## Live Demo

You can view the live demo of the application here: [MPMS Live Demo](https://mpms.vercel.app/)

## Repository Links

- **Frontend Source Code:** [https://github.com/mrvasani48/mpms.git](https://github.com/mrvasani48/mpms.git)
- **Backend Source Code:** [https://github.com/mrvasani48/mpms-backend](https://github.com/mrvasani48/mpms-backend)

## Installation and Running

### Frontend

1. **Clone the Repository:**

   Open a terminal and run:

   ```bash
   git clone https://github.com/mrvasani48/mpms.git
   cd mpms
   ```

2. **Install Dependencies:**

   Ensure Node.js is installed. Then run:

   ```bash
   npm install
   ```

3. **Set Up Environment Variables:**

   Create a `.env` file in the root directory with the following content:

   ```
   REACT_APP_API_BASE_URL=<backend-api-url>
   REACT_APP_SPOTIFY_CLIENT_ID=<your-spotify-client-id>
   REACT_APP_SPOTIFY_REDIRECT_URI=<your-spotify-redirect-uri>
   ```

4. **Start the Development Server:**

   Run:

   ```bash
   npm run dev
   ```

   The frontend will be accessible at [http://localhost:3000](http://localhost:3000).

### Backend

1. **Clone the Repository:**

   Open a terminal and run:

   ```bash
   git clone https://github.com/mrvasani48/mpms-backend.git
   cd mpms-backend
   ```

2. **Install Dependencies:**

   Ensure Node.js is installed. Then run:

   ```bash
   npm install
   ```

3. **Set Up Environment Variables:**

   Create a `.env` file in the root directory with the following content:

   ```
   MONGO_URI=<your-mongodb-uri>
   JWT_SECRET=<your-jwt-secret>
   SPOTIFY_CLIENT_ID=<your-spotify-client-id>
   SPOTIFY_CLIENT_SECRET=<your-spotify-client-secret>
   ```

4. **Start the Server:**

   Run:

   ```bash
   npm start
   ```

   The backend will be accessible at [http://localhost:5000](http://localhost:5000) (or the port specified in your environment variables).

## Documentation

For detailed instructions and documentation, you can refer to the [Project Documentation](https://docs.google.com/document/d/1fpDP8UKpU-IOGPGkXK5aEA-a6GyVTT3fdLz6PocVq9Y/edit).

## Temporary Spotify Credentials

For testing purposes, you can use the following credentials to access the Spotify API:

- **Username:** kishan
- **Password:** Kishan@2904

---

Feel free to adjust or add any information based on your specific requirements.
