-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 12:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `status` set('available','unavailable') NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`) VALUES
(2, 'Sports', 'available'),
(5, 'Fashion', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` tinytext NOT NULL,
  `status` set('in_review','blocked','confirmed') NOT NULL DEFAULT 'in_review'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `status` set('free','subscribed') NOT NULL DEFAULT 'free',
  `title` varchar(200) NOT NULL,
  `image` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `tags` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `comments_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `author`, `status`, `title`, `image`, `content`, `tags`, `date`, `comments_count`) VALUES
(1, 2, 'Laudantium eveniet', 'free', 'Soluta reprehenderit', '_120449468_kenya_essay_976-nc.png', 'Expedita rerum qui e Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio labore sed quidem beatae id a delectus? Repellendus deleniti velit voluptatem aut deserunt commodi asperiores cumque eligendi iure non, error cupiditate id maxime totam doloribus rerum sint saepe. Repellat facere corrupti veniam quod eos possimus perferendis minima eius dolore sint ea similique laborum, aspernatur molestiae suscipit sapiente molestias impedit numquam. Quidem ratione quos exercitationem quis repellat dicta consequuntur delectus in. Cumque quisquam esse asperiores aut, eveniet fuga consequatur quaerat incidunt, a tenetur temporibus ad reiciendis at recusandae eos iusto maxime quis totam quod officiis, ratione laboriosam illo? Nobis architecto nemo accusamus magnam mollitia ea aliquid ipsam nihil tempore quo illo culpa voluptatibus voluptates, minus repellat sit velit! Consequuntur voluptates placeat id numquam repudiandae earum quo asperiores molestiae sequi ea laborum pariatur ducimus repellat, delectus quasi tempore corporis non aut culpa ex quas impedit hic ullam praesentium. Omnis excepturi incidunt animi debitis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio labore sed quidem beatae id a delectus? Repellendus deleniti velit voluptatem aut deserunt commodi asperiores cumque eligendi iure non, error cupiditate id maxime totam doloribus rerum sint saepe. Repellat facere corrupti veniam quod eos possimus perferendis minima eius dolore sint ea similique laborum, aspernatur molestiae suscipit sapiente molestias impedit numquam. Quidem ratione quos exercitationem quis repellat dicta consequuntur delectus in.  repudiandae earum quo asperiores molestiae sequi ea laborum pariatur ducimus repellat, delectus quasi tempore corporis non aut culpa ex quas impedit hic ullam praesentium. Omnis excepturi incidunt animi debitis.  Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio labore sed quidem beatae id a delectus? Repellendus deleniti velit voluptatem aut deserunt commodi asperiores cumque eligendi iure non, error cupiditate id maxime totam doloribus rerum sint saepe. Repellat facere corrupti veniam quod eos possimus perferendis minima eius dolore sint ea similique laborum, aspernatur molestiae suscipit sapiente molestias impedit numquam. Quidem ratione quos exercitationem quis repellat dicta consequuntur delectus in. Cumque quisquam esse asperiores aut, eveniet fuga consequatur quaerat incidunt, a tenetur temporibus ad reiciendis at recusandae eos iusto maxime quis totam quod officiis, ratione laboriosam illo? Nobis architecto nemo accusamus magnam mollitia ea aliquid ipsam nihil tempore quo illo culpa voluptatibus voluptates, minus repellat sit velit! Consequuntur voluptates placeat id numquam repudiandae earum quo asperiores molestiae sequi ea laborum pariatur ducimus repellat, delectus quasi tempore corporis non aut culpa ex quas impedit hic ullam praesentium. Omnis excepturi incidunt animi debitis.', 'Impedit', '2022-09-19', 0),
(2, 2, 'Rerum dolores velit ', 'subscribed', 'Ea minima dignissimo', '', 'Expedita rerum qui e Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio labore sed quidem beatae id a delectus? Repellendus deleniti velit voluptatem aut deserunt commodi asperiores cumque eligendi iure non, error cupiditate id maxime totam doloribus rerum sint saepe. Repellat facere corrupti veniam quod eos possimus perferendis minima eius dolore sint ea similique laborum, aspernatur molestiae suscipit sapiente molestias impedit numquam. Quidem ratione quos exercitationem quis repellat dicta consequuntur delectus in. Cumque quisquam esse asperiores aut, eveniet fuga consequatur quaerat incidunt, a tenetur temporibus ad reiciendis at recusandae eos iusto maxime quis totam quod officiis, ratione laboriosam illo? Nobis architecto nemo accusamus magnam mollitia ea aliquid ipsam nihil tempore quo illo culpa voluptatibus voluptates, minus repellat sit velit! Consequuntur voluptates placeat id numquam repudiandae earum quo asperiores molestiae sequi ea laborum pariatur ducimus repellat, delectus quasi tempore corporis non aut culpa ex quas impedit hic ullam praesentium. Omnis excepturi incidunt animi debitis.\nLorem ipsum dolor sit amet consectetur adipisicing elit. Odio labore sed quidem beatae id a delectus? Repellendus deleniti velit voluptatem aut deserunt commodi asperiores cumque eligendi iure non, error cupiditate id maxime totam doloribus rerum sint saepe. Repellat facere corrupti veniam quod eos possimus perferendis minima eius dolore sint ea similique laborum, aspernatur molestiae suscipit sapiente molestias impedit numquam. Quidem ratione quos exercitationem quis repellat dicta consequuntur delectus in.  repudiandae earum quo asperiores molestiae sequi ea laborum pariatur ducimus repellat, delectus quasi tempore corporis non aut culpa ex quas impedit hic ullam praesentium. Omnis excepturi incidunt animi debitis.\n\nLorem ipsum dolor sit amet consectetur adipisicing elit. Odio labore sed quidem beatae id a delectus? Repellendus deleniti velit voluptatem aut deserunt commodi asperiores cumque eligendi iure non, error cupiditate id maxime totam doloribus rerum sint saepe. Repellat facere corrupti veniam quod eos possimus perferendis minima eius dolore sint ea similique laborum, aspernatur molestiae suscipit sapiente molestias impedit numquam. Quidem ratione quos exercitationem quis repellat dicta consequuntur delectus in. Cumque quisquam esse asperiores aut, eveniet fuga consequatur quaerat incidunt, a tenetur temporibus ad reiciendis at recusandae eos iusto maxime quis totam quod officiis, ratione laboriosam illo? Nobis architecto nemo accusamus magnam mollitia ea aliquid ipsam nihil tempore quo illo culpa voluptatibus voluptates, minus repellat sit velit! Consequuntur voluptates placeat id numquam repudiandae earum quo asperiores molestiae sequi ea laborum pariatur ducimus repellat, delectus quasi tempore corporis non aut culpa ex quas impedit hic ullam praesentium. Omnis excepturi incidunt animi debitis.', 'Impedit deserunt li', '2022-09-07', 0),
(3, 5, 'At fugit est cupida', 'free', 'Aut impedit id exer', '1_l4FAfcRJ58nmIDShIinRzQ.jpeg', 'Consequatur est reru Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio labore sed quidem beatae id a delectus? Repellendus deleniti velit voluptatem aut deserunt commodi asperiores cumque eligendi iure non, error cupiditate id maxime totam doloribus rerum sint saepe. Repellat facere corrupti veniam quod eos possimus perferendis minima eius dolore sint ea similique laborum, aspernatur molestiae suscipit sapiente molestias impedit numquam. Quidem ratione quos exercitationem quis repellat dicta consequuntur delectus in. Cumque quisquam esse asperiores aut, eveniet fuga consequatur quaerat incidunt, a tenetur temporibus ad reiciendis at recusandae eos iusto maxime quis totam quod officiis, ratione laboriosam illo? Nobis architecto nemo accusamus magnam mollitia ea aliquid ipsam nihil tempore quo illo culpa voluptatibus voluptates, minus repellat sit velit! Consequuntur voluptates placeat id numquam repudiandae earum quo asperiores molestiae sequi ea laborum pariatur ducimus repellat, delectus quasi tempore corporis non aut culpa ex quas impedit hic ullam praesentium. Omnis excepturi incidunt animi debitis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio labore sed quidem beatae id a delectus? Repellendus deleniti velit voluptatem aut deserunt commodi asperiores cumque eligendi iure non, error cupiditate id maxime totam doloribus rerum sint saepe. Repellat facere corrupti veniam quod eos possimus perferendis minima eius dolore sint ea similique laborum, aspernatur molestiae suscipit sapiente molestias impedit numquam. Quidem ratione quos exercitationem quis repellat dicta consequuntur delectus in. Cumque quisquam esse asperiores aut, eveniet fuga consequatur quaerat incidunt, a tenetur temporibus ad reiciendis at recusandae eos iusto maxime quis totam quod officiis, ratione laboriosam illo? Nobis architecto nemo accusamus magnam mollitia ea aliquid ipsam nihil tempore quo illo culpa voluptatibus voluptates, minus repellat sit velit! Consequuntur voluptates placeat id numquam repudiandae earum quo asperiores molestiae sequi ea laborum pariatur ducimus repellat, delectus quasi tempore corporis non aut culpa ex quas impedit hic ullam praesentium. Omnis excepturi incidunt animi debitis.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Odio labore sed quidem beatae id a delectus? Repellendus deleniti velit voluptatem aut deserunt commodi asperiores cumque eligendi iure non, error cupiditate id maxime totam doloribus rerum sint saepe. Repellat facere corrupti veniam quod eos possimus perferendis minima eius dolore sint ea similique laborum, aspernatur molestiae suscipit sapiente molestias impedit numquam. Quidem ratione quos exercitationem quis repellat dicta consequuntur delectus in. Cumque quisquam esse asperiores aut, eveniet fuga consequatur quaerat incidunt, a tenetur temporibus ad reiciendis at recusandae eos iusto maxime quis totam quod officiis, ratione laboriosam illo? Nobis architecto nemo accusamus magnam mollitia ea aliquid ipsam nihil tempore quo illo culpa voluptatibus voluptates, minus repellat sit velit! Consequuntur voluptates placeat id numquam repudiandae earum quo asperiores molestiae sequi ea laborum pariatur ducimus repellat, delectus quasi tempore corporis non aut culpa ex quas impedit hic ullam praesentium. Omnis excepturi incidunt animi debitis.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Odio labore sed quidem beatae id a delectus? Repellendus deleniti velit voluptatem aut deserunt commodi asperiores cumque eligendi iure non, error cupiditate id maxime totam doloribus rerum sint saepe. Repellat facere corrupti veniam quod eos possimus perferendis minima eius dolore sint ea similique laborum, aspernatur molestiae suscipit sapiente molestias impedit numquam. Quidem ratione quos exercitationem quis repellat dicta consequuntur delectus in. Cumque quisquam esse asperiores aut, eveniet fuga consequatur quaerat incidunt, a tenetur temporibus ad reiciendis at recusandae eos iusto maxime quis totam quod officiis, ratione laboriosam illo? Nobis architecto nemo accusamus magnam mollitia ea aliquid ipsam nihil tempore quo illo culpa voluptatibus voluptates, minus repellat sit velit! Consequuntur voluptates placeat id numquam repudiandae earum quo asperiores molestiae sequi ea laborum pariatur ducimus repellat, delectus quasi tempore corporis non aut culpa ex quas impedit hic ullam praesentium. Omnis excepturi incidunt animi debitis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio labore sed quidem beatae id a delectus? Repellendus deleniti velit voluptatem aut deserunt commodi asperiores cumque eligendi iure non, error cupiditate id maxime totam doloribus rerum sint saepe. Repellat facere corrupti veniam quod eos possimus perferendis minima eius dolore sint ea similique laborum, aspernatur molestiae suscipit sapiente molestias impedit numquam. Quidem ratione quos exercitationem quis repellat dicta consequuntur delectus in. Cumque quisquam esse asperiores aut, eveniet fuga consequatur quaerat incidunt, a tenetur temporibus ad reiciendis at recusandae eos iusto maxime quis totam quod officiis, ratione laboriosam illo? Nobis architecto nemo accusamus magnam mollitia ea aliquid ipsam nihil tempore quo illo culpa voluptatibus voluptates, minus repellat sit velit! Consequuntur voluptates placeat id numquam repudiandae earum quo asperiores molestiae sequi ea laborum pariatur ducimus repellat, delectus quasi tempore corporis non aut culpa ex quas impedit hic ullam praesentium. Omnis excepturi incidunt animi debitis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio labore sed quidem beatae id a delectus? Repellendus deleniti velit voluptatem aut deserunt commodi asperiores cumque eligendi iure non, error cupiditate id maxime totam doloribus rerum sint saepe. Repellat facere corrupti veniam quod eos possimus perferendis minima eius dolore sint ea similique laborum, aspernatur molestiae suscipit sapiente molestias impedit numquam. Quidem ratione quos exercitationem quis repellat dicta consequuntur delectus in. Cumque quisquam esse asperiores aut, eveniet fuga consequatur quaerat incidunt, a tenetur temporibus ad reiciendis at recusandae eos iusto maxime quis totam quod officiis, ratione laboriosam illo? Nobis architecto nemo accusamus magnam mollitia ea aliquid ipsam nihil tempore quo illo culpa voluptatibus voluptates, minus repellat sit velit! Consequuntur voluptates placeat id numquam repudiandae earum quo asperiores molestiae sequi ea laborum pariatur ducimus repellat, delectus quasi tempore corporis non aut culpa ex quas impedit hic ullam praesentium. Omnis excepturi incidunt animi debitis.', 'Et non animi anim m', '2022-09-25', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
