

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `created_at`) VALUES
(2, 'Rman', 'raman@gmail.com', '7986568931', 'e10adc3949ba59abbe56e057f20f883e', '2020-12-09 06:10:00');

