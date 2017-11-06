-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 12:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `id` int(11) NOT NULL,
  `u_name` text NOT NULL,
  `u_email` text NOT NULL,
  `u_cname` text NOT NULL,
  `u_exp` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`id`, `u_name`, `u_email`, `u_cname`, `u_exp`) VALUES
(1, 'rahul raj', 'rahul.96@gmail.com', 'MakeMyTrip ', 'Question 1 :- count the path in the 2d Matrix, only right and down move is allowed.\nhttp://www.geeksforgeeks.org/count-possible-paths-top-left-bottom-right-nxm-matrix/\nSlight change is 1, 0 is there in the matrix. 0 means no path and 1 means path.\n\nQuestion 2 :- Count the number of the cavity in the 2d matrix and mark it to X, a cavity is defined as all the surrounding number are greater than the mid number.\nFor e.g. 4 5 6\n7 1 5\n4 5 6 here 1 is the cavity.\n\n\n\nRound 2:-\nAlgorithm and Data Structure and problem solving\n\nQ1 http://www.geeksforgeeks.org/median-of-stream-of-integers-running-integers/\n\nQ2 http://www.geeksforgeeks.org/print-nodes-distance-k-given-node-binary-tree/ \nCode is asked and they checked line by line.\n\nQ3 https://www.programcreek.com/2014/03/leetcode-fraction-to-recurring-decimal-java/'),
(2, 'Karthik mehta', 'karthik.20@gmail.com', 'Qualcomm', ' This round was 60 multiple choice questions(20-general aptitude, 20-technical, 20-again technical(based on either communication/electronics/computer science)).Technical was a bit easy and aptitude took time to solve'),
(3, 'vikas', 'vikasg9@gmail.com', 'OLA CABS', 'Question 1 :- count the path in the 2d Matrix, only right and down move is allowed.\nhttp://www.geeksforgeeks.org/count-possible-paths-top-left-bottom-right-nxm-matrix/\nSlight change is 1, 0 is there in the matrix. 0 means no path and 1 means path.\n\nQuestion 2 :- Count the number of the cavity in the 2d matrix and mark it to X, a cavity is defined as all the surrounding number are greater than the mid number.\nFor e.g. 4 5 6\n7 1 5\n4 5 6 here 1 is the cavity.\n\n\n\nRound 2:-\nAlgorithm and Data Structure and problem solving\n\nQ1 http://www.geeksforgeeks.org/median-of-stream-of-integers-running-integers/\n\nQ2 http://www.geeksforgeeks.org/print-nodes-distance-k-given-node-binary-tree/ \nCode is asked and they checked line by line.\n\nQ3 https://www.programcreek.com/2014/03/leetcode-fraction-to-recurring-decimal-java/'),
(4, 'arshdeep', 'arshdeep.singh.95@gmail.com', 'Wipro', 'Round 1: Online Test on AMCAT ASPIRING MINDS, it had various sections like verbal 20 questions in 15 min, logical reasoning 14 questions in 14 min, Quant Aptitude 16 questions in 16 min, Coding Round  2  easy questions 40  min (more than enough time to do them) and ESSAY  writing 20 min 400 words \r\n\r\nQ1.  WAP so that for a given input \r\n\r\nN=3\r\nOutput should be \r\n\r\n1112\r\n3222\r\n3334\r\nQ2.  GCD OF AN ARRAY?\r\n\r\nRound 2: Technical interview just a normal interaction with the interviewer and few basic technical questions based on the language written by you in your resume and questions on your projects.'),
(5, 'rohan', 'rohanmittal@gmail.com', 'SAP Labs', 'This round was conducted on 20th September 2017\r\n\r\nIt consisted of 5 sections.\r\n\r\nSection 1: Aptitude – 6 questions\r\n\r\nSection 2: 2 “C” codes to be debugged(Easy)\r\n\r\nSection 3: 2 coding questions (1 Easy and 1 Medium)\r\n\r\nSection 4: 2 questions on critical reasoning (Critical Analysis)\r\n\r\nSection 5: English (Passage comprehension)-3 questions(Easy)\r\n\r\nSection 6: 4 or 5 Technical questions based on Java and DBMS\r\n\r\nThis Online Round was easy but the trick was time management.\r\n\r\nI attempted both questions for debugging but was getting segmentation fault in second.\r\n\r\nTIP: just grab as many marks in this round as you can, don’t waste all time on coding questions.\r\n\r\nOut of approx. 300 students they have selected 21 for interview round. The interview process took one day. Two technical rounds and 1 HR round.'),
(6, 'hina', 'hinakhurna22@gmail.com', 'Goldman Sach', 'I got a call from a consulting firm regarding this opening. \n\nRound 1: Hackerank Online test:(1.5 hours) It had two questions. you have to pass all the test cases.\n\nGiven an array of numbers, print only those numbers which have 1, 2 and 3 as digits. the numbers should be sorted and comma separated.\ngiven a sequence of M and N with M representing increasing and N representing decreasing. output the smallest number that follows this pattern.\nRound 2: Coderpad round :(1 hour) Usually has two questions. but depending on the time they may or may not ask the second one. you should complete atleast one with an optimal solution.\n\nGiven an array of non-negative numbers & a target value, return the length of smallest subarray whose sum is greater than the target value.'),
(7, 'simran', 'simrankudwala97@gmail.com', 'TCS', ' simple solution is to run two loops and count occurrences of every word. Time complexity of this solution is O(n * n * MAX_WORD_LEN).\r\n\r\nAn efficient solution is to use Trie data structure. The idea is simple first we will insert in trie. In trie, we keep counts of words ending at a node. We do preorder traversal and compare count present at each node and find the maximum occurring word'),
(8, 'aayush', 'aayushchahal95@gmail.com', 'samsung', 'Samsung Delhi recently visited our college for the full time hiring process. Process was much simpler than other companies.Cut-off for appearing in the Online Coding test was 7 and above.\r\n\r\nCoding Round : \r\nOnly one question with the time limit of 2 hour.Level of problem was moderate.\r\nSo the Problem statement was:\r\nA Research team want to establish a research center in a region where they found some rare-elements.They want to make it closest to all the rare-elements as close as possible so that they can reduce overall cost of research over there.It is given that all the rare-element’s location is connected by roads.It is also given that Research Center can only be build on road.Team decided to assign this task to a coder.If you feel you have that much potential..Here is the Task :- Find the shortest of the longest distance of research center from given locations of rare-elements\r\n\r\nlocations are given in the matrix cell form where 1 represents roads and 0 no road..\r\nnumber of rare-element and their location was also given(number<=5)\r\nand order of square matrix was less than equal to (20)'),
(9, 'anand', 'anandgupta97@gmail.com', 'TCS', 'SureShot answer is the key point here, don’t try to attempt all, attempt only those with which you are fully confident because here correct answer marking is +1 and wrong answer marking is -2.\r\n\r\nIt consists of two section aptitude and technical\r\n\r\nIn aptitude part there will be quantitative problems, English grammatical questions, logical questions and also questions were there from HDFS(Hadoop File System).\r\n\r\nIn technical round there will be MCQ questions from :\r\n\r\nC\r\nC++\r\nJAVA\r\nDBMS and some program(C, C++, JAVA) to predict output.'),
(10, 'zoya', 'zoya27@gmail.com', 'Fiserv', 'I got a call from a consulting firm regarding this opening. \n\nRound 1: Hackerank Online test:(1.5 hours) It had two questions. you have to pass all the test cases.\n\nGiven an array of numbers, print only those numbers which have 1, 2 and 3 as digits. the numbers should be sorted and comma separated.\ngiven a sequence of M and N with M representing increasing and N representing decreasing. output the smallest number that follows this pattern.\nRound 2: Coderpad round :(1 hour) Usually has two questions. but depending on the time they may or may not ask the second one. you should complete atleast one with an optimal solution.\n\nGiven an array of non-negative numbers & a target value, return the length of smallest subarray whose sum is greater than the target value.'),
(11, 'fateh singh', 'singh.fateh21@gmail.com', 'TCS', 'Question 1 :- count the path in the 2d Matrix, only right and down move is allowed.\nhttp://www.geeksforgeeks.org/count-possible-paths-top-left-bottom-right-nxm-matrix/\nSlight change is 1, 0 is there in the matrix. 0 means no path and 1 means path.\n\nQuestion 2 :- Count the number of the cavity in the 2d matrix and mark it to X, a cavity is defined as all the surrounding number are greater than the mid number.\nFor e.g. 4 5 6\n7 1 5\n4 5 6 here 1 is the cavity.\n\n\n\nRound 2:-\nAlgorithm and Data Structure and problem solving\n\nQ1 http://www.geeksforgeeks.org/median-of-stream-of-integers-running-integers/\n\nQ2 http://www.geeksforgeeks.org/print-nodes-distance-k-given-node-binary-tree/ \nCode is asked and they checked line by line.\n\nQ3 https://www.programcreek.com/2014/03/leetcode-fraction-to-recurring-decimal-java/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'akash', 'akashatri97@gmail.com', '$2y$10$8ZMHOjJ7J9HJ.dfPzCeVBOU3gZ2cGN92isgqABFzs2eToQ2ObX2CK'),
(2, 'abhi', 'abhi99@gmail.com', '$2y$10$fnvr.y60D0/lz2N7ZsL6B.Re6B3b5IOsWLRN4jV/nPC3gUHPbHqbG'),
(3, 'amanpreet', 'amanpreet@gmail.com', '$2y$10$g./8DSKeOTeUY/ZdnQpYg.uNDWe7GZPQBqfIQ3depbqiT/UANhqd6'),
(4, 'airish', 'airish97@gmail.com', '$2y$10$Cudmr5e1c/RujCfCEHtKHuj20LJi8B7al6nUirSEj5nlfT/9BM1KW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `interview`
--
ALTER TABLE `interview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
