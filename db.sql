-- ----------------------------
-- Table structure for `biodata`
-- ----------------------------
DROP TABLE IF EXISTS `biodata`;
CREATE TABLE `biodata` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of biodata
-- ----------------------------
INSERT INTO `biodata` VALUES ('1', 'hendi', 'blitar');
INSERT INTO `biodata` VALUES ('2', 'Nopi', 'surabaya');
