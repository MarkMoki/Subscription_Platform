# Subscription Platform API

## Overview

This project is a simple subscription platform that allows users to subscribe to multiple websites. Whenever a new post is published on a particular website, all subscribers receive an email notification with the post title and description.

## Features

- **User Management**: Create users who can subscribe to websites.
- **Website Management**: Create multiple websites to publish posts.
- **Post Management**: Create posts for each website.
- **Email Notifications**: Subscribers receive email notifications for new posts.
- **Background Processing**: Use of queues to send emails asynchronously.
- **Event Handling**: Notifications are sent via events and listeners.
- **Caching**: Efficient data handling where applicable.

## Technologies Used

- PHP 8.*
- Laravel Framework
- MySQL
- Composer
- Mail (for email notifications)

## Setup Instructions

### Prerequisites

1. PHP (version 8.*)
2. Composer
3. MySQL or a compatible database
4. A local or remote server with PHP support

### Installation

1. **Clone the Repository**:

   ```bash
   git clone <repository_url>
   cd <project_directory>
#   s u b s c r i p t i o n _ p l a t f o r m  
 