# Real-Time Chat App with Laravel Reverb and Nuxt 3

This repository contains the complete source code for a real-time chat application using **Laravel Reverb** for the backend (API) and **Nuxt 3** for the frontend. This app demonstrates how to set up a chat interface with real-time messaging, typing indicators, and more using separate Laravel and Nuxt 3 projects.

## Features

- **Real-Time Messaging** using Laravel Reverb and Laravel Echo
- **Laravel Sanctum Authentication** for secure API access
- **Typing Indicator** with Echo Whisper events
- **Private Chat Channels** for user-to-user communication
- **Nuxt 3** as the frontend framework with Vue 3 composition API
- **Laravel** as the backend API with Reverb for broadcasting events

## Tutorial

For a step-by-step guide, watch the full tutorial on YouTube:

<a href="https://www.youtube.com/watch?v=bjcM8E5s8p0" title="Nuxt Sanctum
Authentication with Laravel Sanctum Tutorial">
  <img width="512" src="https://i.imgur.com/EHGRCMj.png" alt="Nuxt Sanctum Authentication with Laravel Sanctum" />
</a>


## Installation

### 1. Clone the repository

```bash
git clone git@github.com:qirolab/Nuxt3-Laravel-Reverb-Chat.git
```

### 2. Setup Laravel

1. Navigate to the Laravel folder and install dependencies:

```bash
cd laravel-api
composer install
```

2. Copy the `.env.example` to `.env`:

```bash
cp .env.example .env
```

3. Generate the application key:

```bash
php artisan key:generate
```

4. Set up your database in the `.env` file and run migrations:

```bash
php artisan migrate
```

5. Start the Laravel development server:

```bash
php artisan serve
```

6. In a new terminal, run the Laravel Reverb server:

```bash
php artisan reverb:start
```

### 3. Setup Nuxt 3

1. Navigate to the Nuxt app folder and install dependencies:

```bash
cd nuxt3-app
npm install
```

2. Copy the `.env.example` to `.env`:

```bash
cp .env.example .env
```

3. Make sure to set the `NUXT_SANCTUM_API_URL` in your `.env` file to point to your Laravel app URL.

4. Run the Nuxt development server:

```bash
npm run dev
```
## Project Structure

### Laravel API

The Laravel backend is located in the `laravel-api` directory and is responsible for:

- Handling user authentication via Laravel Sanctum.
- Broadcasting real-time events using **Laravel Reverb**.
- Managing chat messages and users.

### Nuxt 3 App

The Nuxt 3 frontend is located in the `nuxt3-app` directory and handles:

- Displaying real-time chat messages.
- User authentication and routing.
- Integrating with **Laravel Echo** to listen for broadcasted messages and typing events.

## Support my work

If you found this demo helpful and want to support my work, check out some of my other products:

<div style="display:flex;">
  <a href="https://qirolab.com/ctrl-alt-cheat" title="Ctrl+Alt+Cheat - The Ultimate Cheat Sheets at Your Fingertips">
    <img width="200" src="https://i.imgur.com/6igLwXU.png" alt="Ctrl+Alt+Cheat" />
  </a>
  &nbsp;&nbsp;&nbsp;
  <a href="https://qirolab.com/spec-coder" title="Spec Coder: AI-Powered VS Code Extension">
     <img width="200" src="https://i.imgur.com/zHSNlJu.png" alt="Spec Coder" />
  </a>
  &nbsp;&nbsp;&nbsp;
  <a href="https://qirolab.gumroad.com/l/javascript-from-es2015-to-es2023" title="JavaScript: A Comprehensive Guide from ES2015 to ES2023 - eBook">
      <img width="200" src="https://i.imgur.com/vXnJAul.png" alt="JavaScript Guide" />
  </a>
</div>



---

#### Get $200 free credit for DigitalOcean! (Use this link to sign up)

[![DigitalOcean Referral
Badge](https://web-platforms.sfo2.cdn.digitaloceanspaces.com/WWW/Badge%201.svg)](https://www.digitalocean.com/?refcode=e740238537d0&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge)


## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

