SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `projectmanager` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `projectmanager`;

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `name` text COLLATE latin1_spanish_ci NOT NULL,
  `cuit` text COLLATE latin1_spanish_ci NOT NULL,
  `email` text COLLATE latin1_spanish_ci NOT NULL,
  `phone` text COLLATE latin1_spanish_ci NOT NULL,
  `address` text COLLATE latin1_spanish_ci NOT NULL,
  `password` text COLLATE latin1_spanish_ci NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE `configuration` (
  `config_id` int(11) NOT NULL,
  `config_name` text COLLATE latin1_spanish_ci NOT NULL,
  `config_value` text COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

INSERT INTO `configuration` (`config_id`, `config_name`, `config_value`) VALUES
(1, 'email_smtp', 'smtp.gmail.com'),
(2, 'email_port', '443'),
(3, 'store_name', 'ProjectManager'),
(4, 'store_phone', '(362) 1233-4563'),
(5, 'store_email', 'store@email.com'),
(6, 'store_url', 'http://www.store.com');

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `name` text COLLATE latin1_spanish_ci NOT NULL,
  `date_creation` datetime NOT NULL,
  `author_id` int(11) NOT NULL,
  `description` text COLLATE latin1_spanish_ci NOT NULL,
  `public_id` text COLLATE latin1_spanish_ci NOT NULL,
  `status` text COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE `project_client` (
  `project_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE `project_user` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `date_creation` datetime NOT NULL,
  `date_completion` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `title` text COLLATE latin1_spanish_ci NOT NULL,
  `description` text COLLATE latin1_spanish_ci NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE `task_files` (
  `task_id` int(11) NOT NULL,
  `message_id` int(11) DEFAULT NULL,
  `filename` text COLLATE latin1_spanish_ci NOT NULL,
  `uploadby` int(11) NOT NULL,
  `date_upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE `task_messages` (
  `message_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `date_creation` datetime NOT NULL,
  `content` text COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE `task_user` (
  `task_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `date_creation` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `subject` text COLLATE latin1_spanish_ci NOT NULL,
  `content` text COLLATE latin1_spanish_ci NOT NULL,
  `assigned_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE `ticket_files` (
  `ticket_id` int(11) NOT NULL,
  `message_id` int(11) DEFAULT NULL,
  `filename` int(11) NOT NULL,
  `uploadby` int(11) NOT NULL,
  `date_upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE `ticket_messages` (
  `message_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `date_creation` datetime NOT NULL,
  `content` text COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` text COLLATE latin1_spanish_ci NOT NULL,
  `email` text COLLATE latin1_spanish_ci NOT NULL,
  `password` text COLLATE latin1_spanish_ci NOT NULL,
  `role` int(11) NOT NULL,
  `description` text COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `role`, `description`) VALUES
(1, 'Admin', 'admin@admin.com', '202cb962ac59075b964b07152d234b70', 1, 'Administrador del Sitio. La tiene re clara en todo.');


ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

ALTER TABLE `configuration`
  ADD PRIMARY KEY (`config_id`);

ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

ALTER TABLE `task_messages`
  ADD PRIMARY KEY (`message_id`);

ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`);

ALTER TABLE `ticket_messages`
  ADD PRIMARY KEY (`message_id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);


ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `configuration`
  MODIFY `config_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `task_messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `ticket_messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
