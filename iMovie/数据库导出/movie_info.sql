-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 05 月 27 日 01:09
-- 服务器版本: 5.6.15
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `movie`
--

-- --------------------------------------------------------

--
-- 表的结构 `movie_info`
--

CREATE TABLE IF NOT EXISTS `movie_info` (
  `m_id` varchar(10) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `m_style` varchar(30) DEFAULT NULL,
  `m_age` char(5) DEFAULT NULL,
  `m_language` varchar(50) DEFAULT NULL,
  `m_link` varchar(100) DEFAULT NULL,
  `Oscar` varchar(20) DEFAULT NULL,
  `poster` varchar(30) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `movie_info`
--

INSERT INTO `movie_info` (`m_id`, `m_name`, `m_style`, `m_age`, `m_language`, `m_link`, `Oscar`, `poster`) VALUES
('1', '三傻大闹宝莱坞', '剧情 /喜剧 / 爱情 / 歌舞', '2000s', '印度语/英语', 'http://baike.baidu.com/subview/4059797/7366389.htm?fr=aladdin', NULL, 'poster/三傻大闹宝莱坞.jpg'),
('10', '冰川时代', '喜剧/动画/冒险', '2000s', '英语', 'http://baike.baidu.com/subview/34147/12508196.htm', NULL, 'poster/冰川时代.jpg'),
('11', '无间道', '悬疑/惊悚/犯罪', '2000s', '粤语', 'http://baike.baidu.com/subview/9223/7581226.htm', NULL, 'poster/无间道.jpg'),
('12', '七宗罪', '剧情/悬疑/惊悚/犯罪', '1990s', '英语/葡萄牙语', 'http://baike.baidu.com/subview/22021/7627734.htm?fromId=22021&from=rdtself&fr=wordsearch', NULL, 'poster/七宗罪.jpg'),
('13', '大话西游之月光宝盒', '喜剧/动作/爱情/奇幻/冒险', '1990s', '粤语/汉语', '', NULL, 'poster/大话西游.jpg'),
('14', '剪刀手爱德华', '剧情/爱情/奇幻', '1990s', '英语', 'http://baike.baidu.com/view/187288.htm?fr=wordsearch', NULL, 'poster/剪刀手爱德华.jpg'),
('15', '傲慢与偏见', '剧情/爱情', '2000s', '英语', 'http://baike.baidu.com/subview/40337/6389170.htm?fromId=40337&from=rdtself&fr=wordsearch', NULL, 'poster/傲慢与偏见.jpg'),
('16', '一天One day', '剧情/爱情', '2010s', '英语', 'http://baike.baidu.com/view/1865768.htm?fr=wordsearch#1', NULL, 'poster/一天.jpg'),
('17', '盗梦空间', '动作/科幻/悬疑/冒险', '2010s', '英语/日语/法语', 'http://baike.baidu.com/view/2789436.htm', NULL, 'poster/盗梦空间.jpg'),
('18', '后天', '动作/科幻/惊悚/冒险/灾难', '2000s', '英语/法语/日语/意大利语', 'http://baike.baidu.com/subview/63399/6647025.htm?fromId=63399&from=rdtself&fr=wordsearch', NULL, 'poster/后天.jpg'),
('19', '泰坦尼克号', '剧情/爱情/灾难', '1990s', '英语/法语/德语/瑞典语/意大利语/俄语', 'http://baike.baidu.com/subview/9329/5277596.htm?fromId=9329&from=rdtself&fr=wordsearch', '最佳影片', 'poster/泰坦尼克号.jpg'),
('2', '国王的演讲', '剧情/历史', '2010s', '英语', 'http://baike.baidu.com/subview/4377288/7864513.htm?fr=aladdin', '最佳影片', 'poster/国王的演讲.jpg'),
('20', '勇敢的心', '剧情/动作/历史/战争', '1990s', '英语/法语/拉丁语', 'http://baike.baidu.com/subview/31798/7231288.htm?fromId=31798&from=rdtself&fr=wordsearch', '最佳影片/最佳导演', 'poster/勇敢的心.jpg'),
('21', '人鬼情未了', '剧情/爱情/悬疑/惊悚/奇幻', '1990s', '英语', 'http://baike.baidu.com/subview/77847/6409475.htm?fromId=77847&from=rdtself&fr=wordsearch', '最佳女配角', 'poster/人鬼情未了.jpg'),
('22', '卡萨布兰卡', '剧情/爱情/战争', '1940s', '英语/法语/德语', 'http://baike.baidu.com/subview/27807/8214489.htm?fromId=27807&from=rdtself&fr=wordsearch', '最佳影片/最佳导演', 'poster/卡萨布兰卡.jpg'),
('23', '与狼共舞', '剧情/西部/冒险', '1990s', '英语/苏语 / 波尼族语', 'http://baike.baidu.com/subview/28049/6750033.htm#viewPageContent', '最佳影片/最佳导演/最佳外语片', 'poster/与狼共舞.jpg'),
('24', '天堂电影院', '剧情', '1980s', '意大利语/英语/葡萄牙语', 'http://baike.baidu.com/view/42080.htm?fr=wordsearch', '最佳外语片', 'poster/天堂电影院.jpg'),
('25', '千与千寻', '剧情/动画/奇幻', '1980s', '日语', 'http://baike.baidu.com/view/20011.htm?fr=wordsearch', '最佳动画长片', 'poster/千与千寻.jpg'),
('26', '拯救大兵瑞恩', '剧情 / 动作 / 历史 / 战争', '1990s', '英语/法语/德语/捷克语', 'http://baike.baidu.com/view/25462.htm?fr=wordsearch', '最佳影片/最佳导演', 'poster/拯救大兵瑞恩.jpg'),
('27', '低俗小说', '剧情/惊悚/犯罪', '1990s', '英语/西班牙语/法语', 'http://baike.baidu.com/view/386317.htm?fr=wordsearch', '最佳影片', 'poster/低俗小说.jpg'),
('28', '让子弹飞', '剧情/喜剧/动作/西部', '2010s', '汉语', 'http://baike.baidu.com/subview/2653231/6744427.htm?fromId=2653231&from=rdtself&fr=wordsearch', NULL, 'poster/让子弹飞.jpg'),
('29', '神偷奶爸', '喜剧/动画/儿童/犯罪', '2010s', '英语', 'http://baike.baidu.com/view/3937019.htm?fr=wordsearch', NULL, 'poster/神偷奶爸.jpg'),
('3', '乱世佳人', '剧情/爱情/战争', '1930s', '英语', 'http://baike.baidu.com/subview/26932/5478439.htm#viewPageContent', '最佳影片/最佳导演/最佳男主角', 'poster/乱世佳人.jpg'),
('30', '独裁者', '喜剧', '2010s', '英语', 'http://baike.baidu.com/subview/254629/8715543.htm?fromId=254629&from=rdtself&fr=wordsearch', NULL, 'poster/独裁者.jpg'),
('31', '冒牌家庭', '喜剧', '2010s', '英语', 'http://baike.baidu.com/view/9380735.htm?fr=wordsearch', NULL, 'poster/冒牌家庭.jpg'),
('32', '虎口脱险', '喜剧/战争', '1960s', '英语/法语/德语', 'http://baike.baidu.com/subview/281900/9793015.htm?fromId=281900&from=rdtself&fr=wordsearch', NULL, 'poster/虎口脱险.jpg'),
('33', '天使爱美丽', '喜剧/爱情/科幻', '2000s', '法语', 'http://baike.baidu.com/view/265636.htm?fr=wordsearch', NULL, 'poster/天使爱美丽.jpg'),
('34', '我的野蛮女友', '剧情/喜剧/爱情', '2000s', '英语/韩语', 'http://baike.baidu.com/subview/30212/6217093.htm', NULL, 'poster/我的野蛮女友.jpg'),
('35', '博物馆奇妙夜', '喜剧/动作/家庭/奇幻/冒险', '2000s', '英语/意大利语/希伯来语', 'http://baike.baidu.com/subview/741041/7134633.htm', NULL, 'poster/博物馆奇妙夜.jpg'),
('36', '怦然心动', '剧情/喜剧/爱情', '2010s', '英语', 'http://baike.baidu.com/subview/217912/5021318.htm?fromId=217912&from=rdtself&fr=wordsearch', NULL, 'poster/怦然心动.jpg'),
('37', '这个杀手不太冷', '剧情/惊悚/犯罪', '1990s', '英语/意大利语', 'http://baike.baidu.com/view/28484.htm?fr=wordsearch', NULL, 'poster/这个杀手不太冷.jpg'),
('38', '罗马假日', '剧情/喜剧/爱情', '1950s', '英语/意大利语', 'http://baike.baidu.com/subview/17623/7768202.htm?fromId=17623&from=rdtself&fr=wordsearch', NULL, 'poster/罗马假日.jpg'),
('39', '霸王别姬', '剧情/爱情', '1990s', '汉语', 'http://baike.baidu.com/subview/8506/5395584.htm?fromId=8506&from=rdtself&fr=wordsearch', NULL, 'poster/霸王别姬.jpg'),
('4', '两小无猜', '剧情/喜剧/爱情', '2000s', '法语', 'http://baike.baidu.com/subview/56461/6414390.htm?fr=aladdin	', NULL, 'poster/两小无猜.jpg'),
('40', '情书', '剧情/爱情', '1990s', '日语', '', NULL, 'poster/情书.jpg'),
('41', '爱在日落黄昏时', '剧情/爱情', '2000s', '英语/法语', '', NULL, 'poster/爱在黄昏日落时.jpg'),
('42', '返老还童', '剧情/爱情/悬疑/奇幻', '2000s', '英语/俄语/法语', '', NULL, 'poster/返老还童.jpg'),
('43', '史密斯夫妇', '喜剧/动作/爱情', '2000s', '英语/西班牙语', '', NULL, 'poster/史密斯夫妇.jpg'),
('44', '贫民窟的百万富翁', '剧情/爱情', '2000s', '英语/北印度语', '', NULL, 'poster/贫民窟的百万富翁.jpg'),
('5', '云图', '剧情/科幻/悬疑', '2010s', '英语', 'http://baike.baidu.com/subview/949376/6442411.htm?fr=aladdin', NULL, 'poster/云图.jpg'),
('6', '逃离德黑兰', '剧情/惊悚/历史', '2010s', '英语/波斯语', '', '最佳影片', 'poster/逃离德黑兰.jpg'),
('7', 'V字仇杀队', '动作/科幻/惊悚', '2000s', '英语', 'http://baike.baidu.com/subview/41404/7912437.htm?fr=aladdin', NULL, 'poster/V字仇杀队.jpg'),
('8', '机器人总动员', '喜剧/爱情/科幻/动画/冒险', '2000s', '英语', 'http://baike.baidu.com/subview/41404/7912437.htm?fr=aladdin', '最佳动画长片', 'poster/机器人总动员.jpg'),
('9', '借东西的小人阿莉埃蒂', '动画/家庭/奇幻/冒险', '2010s', '日语', 'http://baike.baidu.com/view/3262584.htm?fr=wordsearch', NULL, 'poster/借东西的小人.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
