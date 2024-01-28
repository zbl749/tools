<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240118130249 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'init bookmark database';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bookmark_types (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, `pid` INT DEFAULT NULL, `order` INT DEFAULT NULL, `status` TINYINT(1) NOT NULL DEFAULT 1, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bookmarks (id INT AUTO_INCREMENT NOT NULL, type_id INT DEFAULT NULL, link VARCHAR(255) DEFAULT NULL, title VARCHAR(255) DEFAULT NULL, `order` INT DEFAULT NULL, `status` TINYINT(1) NOT NULL DEFAULT 1, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_78D2C140C54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bookmarks ADD CONSTRAINT FK_78D2C140C54C8C93 FOREIGN KEY (type_id) REFERENCES bookmark_types (id)');
        $this->addSql("INSERT INTO `bookmark_types` (`id`, `name`, `pid`, `order`, `status`, `created_at`, `updated_at`)
VALUES
	(1, '试剂耗材', 0, 1, 0, '2022-04-17 13:06:53', '2022-04-17 13:07:58'),
	(2, 'u', 0, 2, 0, '2022-04-17 13:07:25', '2022-04-17 13:08:01'),
	(3, 'GENE、Protein、数据库', 0, 11, 1, '2022-04-18 00:58:48', '2022-04-25 01:09:36'),
	(4, '小软件/扩展小插件', 0, 4, 1, '2022-04-18 01:07:54', '2023-12-29 06:01:53'),
	(5, '酶', 0, 5, 1, '2022-04-18 01:10:02', '2022-04-24 09:33:59'),
	(6, '品牌官网', 0, 11, 1, '2022-04-18 01:53:40', '2023-05-25 05:40:51'),
	(7, '蛋白互作', 0, 6, 1, '2022-04-18 06:02:14', '2022-06-07 12:50:21'),
	(8, '小分子、抑制剂', 0, 8, 1, '2022-04-18 06:40:03', NULL),
	(9, '小分子靶点预测网站', 0, 9, 1, '2022-04-18 12:10:03', NULL),
	(10, '抗体List', 0, 10, 1, '2022-04-20 12:09:43', '2022-04-22 16:33:46'),
	(11, 'Artical', 0, 3, 1, '2022-04-21 06:04:08', '2022-06-07 10:46:40'),
	(12, '国科大数据库', 0, 16, 1, '2022-05-05 14:38:45', '2023-05-25 05:40:56'),
	(13, '那啥', 0, 12, 1, '2022-08-18 15:11:40', NULL),
	(14, 'for article', 0, 13, 1, '2022-08-29 07:02:43', NULL),
	(15, '试剂盒', 0, 14, 1, '2022-12-22 13:05:17', NULL),
	(16, '第三方服务公司', 0, 15, 1, '2023-02-01 08:07:40', NULL),
	(17, '质粒', 0, 17, 1, '2023-05-09 01:23:38', '2023-05-25 05:40:56'),
	(18, '我给你加的', 0, 18, 1, '2023-05-25 05:40:36', '2023-05-25 05:46:43'),
	(19, '慢病毒包装', 0, 18, 1, '2023-07-25 04:30:36', NULL),
	(20, '我用的乱七八糟', 0, 19, 1, '2023-07-26 14:19:03', NULL),
	(21, '指南', 0, 20, 1, '2023-12-22 05:57:54', NULL);
");
        $this->addSql("INSERT INTO `bookmarks` (`id`, `type_id`, `link`, `title`, `order`, `status`, `created_at`, `updated_at`)
VALUES
	(1, 1, '', '', NULL, 1, '2022-04-17 13:06:58', NULL),
	(2, 1, '', '', NULL, 1, '2022-04-17 13:07:03', NULL),
	(3, 1, '', '', NULL, 1, '2022-04-17 13:07:06', NULL),
	(4, 3, 'https://www.uniprot.org/uniprot/P0DTD1', 'UniProtKB - P0DTD1 (R1AB_SARS2)', NULL, 1, '2022-04-18 01:01:54', '2022-04-25 15:23:18'),
	(5, 3, 'https://www.ncbi.nlm.nih.gov/nuccore/NC_045512.2?from=28274&to=29533&report=genbank', 'SARS COV-2-N-NC_045512.2', NULL, 0, '2022-04-18 01:02:41', '2022-08-11 01:36:28'),
	(6, 3, 'https://www.ncbi.nlm.nih.gov/nuccore/NM_006597.6', 'HSPA8-NM_006597.6', NULL, 1, '2022-04-18 01:06:37', '2022-04-25 15:21:04'),
	(7, 4, 'https://rshine.einsteinmed.edu/', 'KFERQ-Finder V0.8 [PMID: 35120120]', NULL, 1, '2022-04-18 01:08:26', '2023-04-11 14:34:27'),
	(8, 4, 'https://www.selleck.cn/molaritycalculator.jsp', '摩尔浓度计算器', NULL, 1, '2022-04-18 01:09:07', NULL),
	(9, 4, 'https://wenku.baidu.com/view/ab6e4ea3872458fb770bf78a6529647d262834f9.html', '氨基酸密码子对照表', NULL, 1, '2022-04-18 01:09:48', NULL),
	(10, 5, 'https://www.thermofisher.cn/order/catalog/product/FD1703?SID=srch-srp-FD1703', '点突变-DpnI-Thermo', NULL, 1, '2022-04-18 01:11:10', NULL),
	(11, 5, 'https://www.takarabiomed.com.cn/ProductShow.aspx?m=20141215102947967163&productID=20141225131601423744', '克隆-连接酶-Takara', NULL, 1, '2022-04-18 01:12:36', NULL),
	(12, 5, 'http://www.neb-china.com/pshow.asp?id=2896', '克隆-限制性内切酶-NEB(星选、高浓度)', NULL, 1, '2022-04-18 01:13:46', '2022-04-18 01:14:11'),
	(13, 5, 'https://www.vazyme.com/product/204.html', '克隆-连接酶-vazyme', NULL, 1, '2022-04-18 01:15:52', NULL),
	(14, 5, 'https://www.vazyme.com/product/120.html', 'PCR-高保真酶(适合扩穿)-vazyme', NULL, 1, '2022-04-18 01:16:42', '2022-04-18 01:55:25'),
	(15, 6, 'http://www.zomanbio.com/products_info.php?nid=4006', 'WB-超显ECL-庄盟', NULL, 1, '2022-04-18 01:54:06', NULL),
	(16, 5, 'https://www.vazyme.com/product/116.html', 'PCR-高保真酶-vazyme', NULL, 1, '2022-04-18 01:55:05', NULL),
	(17, 7, 'https://thebiogrid.org/4383860/summary/severe-acute-respiratory-syndrome-coronavirus-2/nsp12.html', 'BioGRID-NSP12', NULL, 1, '2022-04-18 06:03:01', '2022-04-18 06:03:14'),
	(18, 8, 'https://www.selleck.cn/', 'selleck', NULL, 1, '2022-04-18 06:40:13', NULL),
	(19, 3, 'https://beta.uniprot.org/uniprotkb/P11142/entry', 'uniprot-HSPA8', NULL, 1, '2022-04-18 06:59:26', '2022-04-25 15:20:20'),
	(20, 3, 'https://www.kegg.jp/', 'KEGG', NULL, 1, '2022-04-18 07:12:38', NULL),
	(21, 3, 'https://www.kegg.jp/entry/map05171', 'KEGG-COVID', NULL, 1, '2022-04-18 07:15:09', NULL),
	(22, 3, 'https://pubmed.ncbi.nlm.nih.gov/', 'Pubmed', NULL, 1, '2022-04-18 07:18:17', NULL),
	(23, 7, 'https://cn.string-db.org/', 'SRING', NULL, 1, '2022-04-18 10:44:15', NULL),
	(24, 7, 'http://mips.helmholtz-muenchen.de/corum/#?uniprotID=P11142', '蛋白复合物-CORUM', NULL, 1, '2022-04-18 10:48:07', NULL),
	(25, 7, 'https://mint.bio.uniroma2.it/index.php/results-interactions/?id=P11142', 'MINT', NULL, 1, '2022-04-18 10:48:36', NULL),
	(26, 7, 'https://www.ebi.ac.uk/complexportal/complex/CPX-5824', 'IntAct', NULL, 1, '2022-04-18 10:49:20', NULL),
	(27, 9, 'http://www.swisstargetprediction.ch/result.php?job=2042465490&organism=Homo_sapiens', 'SwissTarget Prediction-41', NULL, 1, '2022-04-18 12:10:35', '2022-04-18 12:11:39'),
	(28, 9, 'https://sea.bkslab.org/jobs/search_9e0e7b5d-dcc9-4b4e-9cfe-a9f0f55abdab', 'SEA', NULL, 1, '2022-04-18 12:26:45', NULL),
	(29, 9, 'https://prediction.charite.de/subpages/target_result.php', 'Super-PRED', NULL, 1, '2022-04-18 12:27:09', NULL),
	(30, 7, 'https://thebiogrid.org/109544/summary/homo-sapiens/hspa8.html', 'BioGRID-HSC70', NULL, 1, '2022-04-19 09:34:46', NULL),
	(31, 3, 'https://www.ncbi.nlm.nih.gov/nuccore/NC_045512.2', 'SARS COV-2-NC_045512.2', NULL, 1, '2022-04-20 02:23:22', '2022-04-25 15:20:07'),
	(32, 10, 'http://www.ab-mart.com.cn/page.aspx?node=%20117%20&id=%201681', 'Abmart-HSC70-P55417', NULL, 1, '2022-04-20 12:10:56', NULL),
	(33, 4, 'https://primer3.ut.ee/', 'qPCR引物设计', NULL, 1, '2022-04-20 12:46:47', NULL),
	(34, 11, 'https://pubmed.ncbi.nlm.nih.gov/23806880/', 'HSP90-HSC70-HSP40-HOP-折叠底物？', NULL, 0, '2022-04-21 06:04:40', '2022-04-21 06:35:42'),
	(35, 11, 'https://www.sciencedirect.com/science/article/pii/S0303720713000555?via%3Dihub', 'HSP90-HSC70-HSP40-HOP-折叠底物PMID: 23395916', NULL, 1, '2022-04-21 06:21:28', '2022-04-21 06:31:20'),
	(36, 11, 'https://onlinelibrary.wiley.com/doi/10.1002/bip.21292', 'Hsp90 and co-chaperones', NULL, 1, '2022-04-21 06:23:27', NULL),
	(37, 11, 'https://pubmed.ncbi.nlm.nih.gov/23806880/', 'HSP90-HSC70-HSP40-HOP-折叠底物PMID: 23806880', NULL, 1, '2022-04-21 06:34:04', '2022-04-21 06:36:46'),
	(38, 11, 'https://pubmed.ncbi.nlm.nih.gov/22960394/', 'HSC70和伴侣蛋白功能综述PMID: 22960394', NULL, 1, '2022-04-21 07:19:51', '2022-04-21 07:20:03'),
	(39, 11, 'https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7397107/', 'HSC70 PMID: 32518165', NULL, 1, '2022-04-21 07:34:11', NULL),
	(40, 3, 'https://www.ncbi.nlm.nih.gov/nuccore/NM_005880.4', 'DNAJA2-NM_005880.4', NULL, 1, '2022-04-21 08:16:49', '2022-04-25 15:19:59'),
	(41, 11, 'https://pubmed.ncbi.nlm.nih.gov/22960394/', '70和他的伴侣们合辑PMID: 22960394', NULL, 0, '2022-04-21 12:35:41', '2022-04-21 13:52:19'),
	(42, 11, 'https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5382173/', 'PMID: 28428740', NULL, 1, '2022-04-21 13:18:31', NULL),
	(43, 11, 'https://pubmed.ncbi.nlm.nih.gov/7585962/', 'HIP', NULL, 1, '2022-04-22 07:01:42', NULL),
	(44, 3, 'https://www.ncbi.nlm.nih.gov/nuccore/NM_006601.7', 'P23(PTGES3)-NM_006601.7', NULL, 1, '2022-04-22 07:41:52', '2022-04-25 15:19:50'),
	(45, 11, 'https://pubmed.ncbi.nlm.nih.gov/14507910/', 'p23  PMID: 14507910', NULL, 1, '2022-04-24 06:29:44', NULL),
	(46, 11, 'https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5382173/', 'Protein Quality Control PMID: 28428740', NULL, 1, '2022-04-24 06:30:55', NULL),
	(47, 11, 'https://pubmed.ncbi.nlm.nih.gov/23395916/', 'Foldosome regulation of androgen receptor  PMID: 23395916', NULL, 1, '2022-04-24 06:33:03', NULL),
	(48, 11, 'https://www.sciencedirect.com/science/article/pii/S0021925818485547?via%3Dihub', 'Lysine 71 of the Chaperone Protein Hsc70 Is Essential for ATP Hydrolysis PMID: 8663302', NULL, 1, '2022-04-25 01:15:38', NULL),
	(49, 4, 'https://www.scholarscope.cn/', 'scholarscope影响因子', NULL, 1, '2022-04-25 13:30:12', NULL),
	(50, 4, 'https://www.researcher-app.com/feed/all', '文献追踪', NULL, 1, '2022-04-25 13:40:50', NULL),
	(51, 4, 'https://abcdpdf.com/', 'free pdf converter', NULL, 1, '2022-04-25 13:48:29', NULL),
	(52, 7, 'https://thebiogrid.org/4383856/summary/severe-acute-respiratory-syndrome-coronavirus-2/nsp7.html', 'BioGRID-NSP7', NULL, 1, '2022-04-25 15:15:14', NULL),
	(53, 3, 'https://www.uniprot.org/uniprot/P31948', 'UniProtKB - P31948 (STIP1_HUMAN)', NULL, 1, '2022-04-25 15:21:59', NULL),
	(54, 3, 'https://www.uniprot.org/uniprot/P50502', 'UniProtKB - P50502 (F10A1_HUMAN)  HiP', NULL, 1, '2022-04-25 15:22:43', '2022-04-25 15:22:53'),
	(55, 3, 'https://www.uniprot.org/uniprot/Q15185', 'UniProtKB - Q15185 (PTGES3', NULL, 0, '2022-04-25 15:24:13', '2022-08-11 01:35:50'),
	(56, 3, 'https://www.rcsb.org/', 'PDB', NULL, 1, '2022-05-05 10:49:37', NULL),
	(57, 12, 'https://sep.ucas.ac.cn/', 'SEP', NULL, 1, '2022-05-05 14:38:53', NULL),
	(58, 4, 'https://www.tsingke.com.cn/user/sanger_details?id=1844198', '擎科测序', NULL, 1, '2022-05-06 13:28:05', NULL),
	(59, 6, 'https://www.ptgcn.com/', 'protaintech', NULL, 0, '2022-05-30 01:14:01', '2022-10-12 13:00:09'),
	(60, 6, 'https://www.transgen.com.cn/', '全式金', NULL, 1, '2022-05-30 01:14:29', NULL),
	(61, 10, 'https://www.ptgcn.com/products/HSPA8-Antibody-10654-1-AP.htm', 'proteintech-HSC70-10654-1-AP', NULL, 1, '2022-05-30 01:17:32', '2022-05-30 01:17:49'),
	(62, 11, 'https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6561683/', 'KFERQ原则', NULL, 1, '2022-05-31 11:38:08', NULL),
	(63, 4, 'https://www.thermofisher.cn/cn/zh/home/references/gibco-cell-culture-basics/cell-culture-protocols/cell-culture-useful-numbers.html', 'Useful Numbers for Cell Culture', NULL, 1, '2022-06-08 01:30:01', NULL),
	(64, 6, 'https://www.neb.cn/', 'NEB', NULL, 1, '2022-06-09 02:52:51', NULL),
	(65, 5, 'https://www.vazyme.com/product/79.html', '点突变-试剂盒-vazyme', NULL, 1, '2022-06-17 01:26:21', NULL),
	(66, 5, 'https://www.vazyme.com/product/30.html', '转染-T101-01-vazyme(800R))', NULL, 1, '2022-06-17 01:27:33', NULL),
	(67, 6, 'https://www.ptgcn.com/', 'Proteintech', NULL, 1, '2022-06-17 02:24:45', NULL),
	(68, 6, 'https://www.scbt.com/zh/browse/antibodies/_/N-med3ky', 'Santacruz', NULL, 1, '2022-06-18 12:47:50', NULL),
	(69, 8, 'https://www.aladdin-e.com/zh_cn/', '阿拉丁', NULL, 1, '2022-06-20 02:18:13', NULL),
	(70, 12, 'https://sci.justscience.cn/index.php?q=ejmc&sci=1', 'IF查询', NULL, 1, '2022-06-24 07:16:43', NULL),
	(71, 12, 'https://www.letpub.com.cn/index.php?journalid=6706&page=journalapp&view=detail', 'IF-Letpub', NULL, 1, '2022-06-24 10:28:09', NULL),
	(72, 9, 'https//www.pdbus.org/', 'PDB', NULL, 1, '2022-06-27 09:23:06', NULL),
	(73, 9, 'https://www.lfd.uci.edu/~gohlke/pythonlibs/', '下载pymol', NULL, 1, '2022-06-27 10:35:02', NULL),
	(74, 8, 'https://www.medchemexpress.cn/ammonium-chloride.html', 'MCE', NULL, 1, '2022-06-30 12:11:05', NULL),
	(75, 4, 'https://www.addgene.org/', 'addgene-查质粒', NULL, 1, '2022-07-09 08:36:17', NULL),
	(76, 6, 'https://www.ql-lab.com/', '其林贝尔', NULL, 1, '2022-08-02 02:30:42', NULL),
	(77, 12, 'https://www.las.ac.cn/front/endNote/detail', '中科院文献情报中心-EndNote', NULL, 1, '2022-08-04 13:44:16', NULL),
	(78, 6, 'https://www.tsingke.com.cn/', '擎科', NULL, 1, '2022-08-15 07:29:12', NULL),
	(79, 9, 'https://services.healthtech.dtu.dk/service.php?NetPhos-3.1', '磷酸化预测', NULL, 1, '2022-08-18 15:08:30', NULL),
	(80, 13, 'https://www.nsfc.gov.cn/', '国自然基金', NULL, 1, '2022-08-18 15:11:55', NULL),
	(81, 3, 'https://sci-hub.se/', 'sci-hub', NULL, 1, '2022-08-27 04:18:03', NULL),
	(82, 14, 'https://mp.weixin.qq.com/s/GbgIZ5BHGoFOMYPejB8LEw', '单因素方差分析', NULL, 1, '2022-08-29 07:03:21', NULL),
	(83, 14, 'https://cn.bio-protocol.org/bio101/default.aspx', 'bio-protocol', NULL, 1, '2022-09-22 01:23:15', NULL),
	(84, 12, 'https://sep.ucas.ac.cn/appStore', '国科大SEP', NULL, 1, '2022-09-27 03:06:01', NULL),
	(85, 6, 'https://www.bioworlde.com/', 'bioworlde', NULL, 1, '2022-10-12 12:59:41', NULL),
	(86, 6, 'http://www.ab-mart.com.cn/', 'abmart', NULL, 1, '2022-10-12 13:32:58', NULL),
	(87, 3, 'https://www.uniprot.org/uniprotkb/P0DMV8/entry', 'uniport-HSP70', NULL, 1, '2022-10-28 14:11:04', NULL),
	(88, 3, 'https://www.genecards.org/', 'genecard', NULL, 1, '2022-11-05 10:28:13', NULL),
	(89, 6, 'https://www.cytivalifesciences.com.cn/zh/cn', '思拓凡cytiva-S CM5', NULL, 1, '2022-11-19 02:36:54', NULL),
	(90, 12, 'https://endnote.com/downloads/styles/', 'endnote下载参考文献格式', NULL, 1, '2022-11-19 07:15:14', NULL),
	(91, 12, 'http://samp.cas.cn/', '中国科学院仪器共享管理平台-液氮-刘小兵', NULL, 1, '2022-11-24 11:52:40', NULL),
	(92, 4, 'https://www.agilent.com.cn/store/primerDesignProgram.jsp?toggle=uploadTrans&mutate=true&_requestid=2660806', '点突变引物设计-安捷伦', NULL, 1, '2022-11-28 07:04:32', NULL),
	(93, 4, 'https://www.genscript.com.cn/quick_order/gene_services_mutagenesis', '金斯瑞-Mutagenesis', NULL, 1, '2022-12-21 03:42:53', NULL),
	(94, 15, 'https://www.thermofisher.cn/order/catalog/product/89839?SID=srch-srp-89839', '组织和培养细胞溶酶体富集试剂盒（Thermo , 89839)（PMID: 34436957）', NULL, 1, '2022-12-22 13:06:14', '2022-12-22 13:13:07'),
	(95, 15, 'https://www.medchemexpress.cn/Torin-1.html', 'CMA促进剂：Torin 1  目录号: HY-13003 （PMID: 34436957）', NULL, 1, '2022-12-22 13:07:24', NULL),
	(96, 15, 'https://www.medchemexpress.cn/inhibitor-kit/streptavidin-magnetic-beads.html', '链霉亲和素磁珠（PMID: 35541921）', NULL, 1, '2022-12-22 13:12:28', NULL),
	(97, 4, 'https://web.expasy.org/protparam/', '蛋白等电点查询', NULL, 1, '2023-01-10 04:16:57', NULL),
	(98, 16, 'https://www.yangenebio.cn/index.php?c=category&id=63', '武汉研锦-分子互作MST-4500', NULL, 1, '2023-02-01 08:08:16', '2023-02-01 08:08:51'),
	(99, 4, 'https://cloud.tencent.com/developer/article/1832264?ivk_sa=1025883i', 'raphpad Prism绘制基因结构示意图', NULL, 1, '2023-02-08 05:57:50', '2023-02-08 05:58:08'),
	(100, 12, 'https://imagej.net/ij/download.html', 'image j-下载', NULL, 1, '2023-03-02 10:01:58', NULL),
	(101, 4, 'https://www.xiaohongshu.com/explore/6262ee51000000002103c437', 'grapdh prism单因素方差分析方法', NULL, 1, '2023-03-06 08:38:47', NULL),
	(102, 4, 'http://www.miaolingbio.com/', '质粒购买', NULL, 1, '2023-03-28 12:08:09', NULL),
	(103, 15, 'http://www.bestbio.com.cn/products?currentNode=42&categoryId=407&page=2', '溶酶体分离试剂盒-上海贝博-BestBio-PMID: 33431801', NULL, 1, '2023-04-05 05:53:57', '2023-04-05 05:54:18'),
	(104, 8, 'https://www.medchemexpress.cn/Wortmannin.html', 'wortmannin-抑制巨自噬不影响cma-PMID: 21205201', NULL, 1, '2023-04-11 14:12:51', NULL),
	(105, 6, 'http://www.sinozhongyuan.com/channel.action?chnlid=3981', '中源生物-addgene/ATCC中国代理', NULL, 1, '2023-04-21 11:42:03', NULL),
	(106, 17, 'https://www.addgene.org/102365/', 'pSIN-PAmCherry-KFERQ-NE (Plasmid #102365)', NULL, 1, '2023-05-09 01:24:01', NULL),
	(107, 4, 'https://www.novopro.cn/tools/', '蛋白分析', NULL, 1, '2023-05-17 09:52:53', NULL),
	(108, 9, 'https://prosite.expasy.org/', '磷酸化？', NULL, 1, '2023-05-17 11:01:51', NULL),
	(109, 18, 'https://chat3.eqing.tech/#/', 'ChatGPT - one', NULL, 1, '2023-05-25 05:41:13', '2023-12-18 12:45:37'),
	(110, 18, 'https://vip.easychat.work/#/', 'ChatGPT - three', NULL, 1, '2023-05-25 05:41:54', '2023-12-18 12:44:53'),
	(112, 3, 'https://www.uniprot.org/uniprotkb/A0A286L9K2/entry', 'PEDV-85-7', NULL, 1, '2023-05-31 02:19:24', NULL),
	(113, 3, 'https://www.uniprot.org/uniprotkb/P0DTD1/entry', 'sars-cov-2-orf1ab', NULL, 1, '2023-05-31 06:20:35', NULL),
	(114, 15, 'https://www.thermofisher.cn/cn/zh/home/life-science/cell-culture/transfection/transfection-support/transfection-selection-tool.html', '转染', NULL, 1, '2023-06-03 06:34:39', NULL),
	(115, 6, 'https://www.fenghbio.cn/goods.php?id=95771', '丰晖生物-质粒购买', NULL, 1, '2023-06-03 09:38:16', NULL),
	(116, 6, 'http://www.miaolingbio.com/', '淼灵生物-质粒购买', NULL, 1, '2023-06-03 09:38:48', NULL),
	(117, 10, 'https://www.genetex.cn/Product/Detail/SARS-CoV-2-COVID-19-nsp12-antibody/GTX135467', 'NSP12-多抗-PMID: 33637958', NULL, 1, '2023-06-13 01:18:51', NULL),
	(118, 10, 'https://www.abcam.cn/products/primary-antibodies/sars-cov-2-covid-19-nsp12-antibody-hl1415-ab308367.html', 'abcam-nsp12', NULL, 1, '2023-06-14 09:04:08', NULL),
	(119, 10, 'https://abclonal.com.cn/catalog/A20233', 'abclonal-nsp12', NULL, 1, '2023-06-14 09:04:48', NULL),
	(120, 10, 'https://www.abbexa.com/sars-cov-2-nsp12-antibody', 'abbexa-nsp12', NULL, 1, '2023-06-14 09:06:56', NULL),
	(121, 10, 'https://abclonal.com.cn/catalog/A21042', 'N单抗', NULL, 1, '2023-06-14 12:57:16', NULL),
	(122, 17, 'https://china.guidechem.com/trade/pdetail26447773.html', 'psPAX2', NULL, 1, '2023-06-30 06:42:02', NULL),
	(123, 17, 'http://shebei.cnreagent.com/product/pro_85908.html', 'pMD2.G', NULL, 1, '2023-06-30 06:42:21', NULL),
	(124, 17, 'https://www.solarbio.com/goods-201870.html', 'pLentiCRISPRv2GFP-SV40-Puro', NULL, 1, '2023-06-30 06:42:41', '2023-06-30 06:43:03'),
	(125, 4, 'https://www.thermofisher.cn/cn/zh/home/references/gibco-cell-culture-basics/cell-culture-protocols/cell-culture-useful-numbers.html', 'thermo-细胞个数', NULL, 1, '2023-07-05 01:19:35', NULL),
	(126, 19, 'https://zhuanlan.zhihu.com/p/330700956', '知乎1', NULL, 1, '2023-07-25 04:30:45', NULL),
	(127, 20, 'https://www.sigmaaldrich.cn/CN/zh/product/sigma/p7280', '多聚赖氨酸-使用浓度：0.1mg/ml', NULL, 1, '2023-07-26 14:19:11', '2023-07-26 14:21:31'),
	(128, 20, 'https://www.thermofisher.cn/order/catalog/product/A3890401?SID=srch-srp-A3890401', '多聚赖氨酸-也可以考虑thermo的', NULL, 1, '2023-07-26 14:21:09', NULL),
	(129, 20, 'https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6422091/', 'siLamp2A-293T', NULL, 1, '2023-07-26 14:25:26', NULL),
	(130, 7, 'https://www.abcam.cn/products/chip-kits/gfp-quantification-kit-ab235672.html', 'MST-GFP Quantification试剂盒(ab235672)-贝尔吉3758', NULL, 1, '2023-07-27 05:22:20', NULL),
	(131, 4, 'https://www.guidetopharmacology.org/GRAC/ObjectDisplayForward?objectId=3139', 'IUPHAR-DB  网址：https://www.guidetopharmacology.org/IUPHAR-DB为G蛋白偶联受体、离子通道数据库，提供这些蛋白的基因、功能、结构、配体、表达图谱、信号转导机制、多样性等数据。可以用于药物靶点查找，可以按照免疫过程信号通路查询或者在不同细胞特异表达查询或者根据蛋白是激酶、离子通道分类进行查询。', NULL, 1, '2023-09-01 15:12:31', '2023-09-01 15:12:50'),
	(132, 4, 'https://www.ncbi.nlm.nih.gov/Structure/cdd/wrpsb.cgi', 'CD-SEARCH 功能域分析', NULL, 1, '2023-09-01 15:22:35', NULL),
	(133, 4, 'https://www.learnui.design/tools/data-color-picker.html#palette', '配色工具1', NULL, 1, '2023-10-09 15:21:28', NULL),
	(134, 4, 'https://cloud.tencent.com/developer/article/1832264?areaSource=102001.5&traceId=P-eZqrluzOJoMX_C4bu8u', '用Graphpad Prism绘制基因结构示意图', NULL, 1, '2023-10-10 15:16:56', NULL),
	(135, 3, 'https://www.ncbi.nlm.nih.gov/protein/AAP13566', 'sars-cov GenBank: AAP13566.1', NULL, 1, '2023-10-16 02:41:56', '2023-10-16 02:42:30'),
	(136, 3, 'https://www.ncbi.nlm.nih.gov/nuccore/NC_045512.2', 'sars-cov-2(wuhan)NC_045512.2', NULL, 1, '2023-10-16 02:48:51', NULL),
	(137, 20, 'https://mp.weixin.qq.com/s/Vm6mwWLvsYo1gPBx9BWTxA', '膜蛋白研究', NULL, 1, '2023-11-02 11:52:26', NULL),
	(138, 20, 'https://pubmed.ncbi.nlm.nih.gov/36375317/', 'EBioMedicine . -11.1-Q1', NULL, 1, '2023-11-20 08:01:16', NULL),
	(139, 12, 'https://www.nature.com/subjects/sars-virus', 'NC-Virus', NULL, 1, '2023-11-29 01:51:45', NULL),
	(140, 4, 'https://zhuanlan.zhihu.com/p/544280835', '多通道荧光蛋白选择', NULL, 1, '2023-12-05 14:20:19', NULL),
	(141, 20, 'https://www.termonline.cn/', '术语在线', NULL, 1, '2023-12-08 14:44:55', NULL),
	(142, 4, 'https://www.genscript.com.cn/tools.html?src=footer', '金斯瑞-工具', NULL, 1, '2023-12-11 06:22:43', NULL),
	(143, 20, 'https://www.ncrm.org.cn/Web/Ordering/MaterialDetail?autoID=20062', '动物所-标准品', NULL, 1, '2023-12-11 08:02:51', NULL),
	(144, 18, 'https://origin.eqing.tech', 'eqing ChatGPT', NULL, 1, '2023-12-18 12:42:14', '2024-01-11 04:07:25'),
	(145, 21, 'https://www.graphpad-prism.cn/guides/prism/10/user-guide/exporting_to_journals.htm', 'prism指南', NULL, 1, '2023-12-22 05:58:05', NULL),
	(146, 21, 'https://paper.dxy.cn/article/508790', 'prism-柱间距', NULL, 1, '2023-12-23 06:42:23', NULL),
	(147, 21, 'https://www.scidev.net/global/practical-guides/how-do-i-write-a-scientific-paper/', 'How do I write a scientific paper?-Nature', NULL, 1, '2023-12-26 12:46:18', NULL),
	(148, 21, 'https://www.nature.com/nature/for-authors/supp-info', 'nature-写作指南', NULL, 1, '2023-12-26 13:00:48', NULL),
	(149, 21, 'http://bbs.keinsci.com/thread-4332-1-10.html', 'logP-1(小分子亲疏水)', NULL, 1, '2023-12-28 02:33:00', NULL),
	(150, 21, 'http://sobereva.com/43', '搜索logP-2(小分子亲疏水)', NULL, 1, '2023-12-28 02:33:24', NULL),
	(151, 21, 'https://pubchem.ncbi.nlm.nih.gov/', 'logP-3', NULL, 1, '2023-12-28 02:33:43', NULL),
	(152, 21, 'https://zhuanlan.zhihu.com/p/636950891?utm_id=0', 'logP', NULL, 1, '2023-12-28 02:46:05', NULL),
	(153, 21, 'https://www.douban.com/group/topic/178500541/?_i=37712015KUzdb4', 'endnot参考文献数字右上标方法', NULL, 1, '2023-12-28 13:50:12', '2023-12-28 13:50:37'),
	(154, 21, 'https://services.healthtech.dtu.dk/services/NetPhos-3.1/', 'NetPhos-3.1-磷酸化预测', NULL, 1, '2023-12-30 06:36:35', '2023-12-30 06:37:03'),
	(155, 18, 'https://chat.zbl.yuandingriji.com', '我给你搭的', NULL, 1, '2024-01-11 04:05:39', '2024-01-11 04:06:53');
");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bookmarks DROP FOREIGN KEY FK_78D2C140C54C8C93');
        $this->addSql('DROP TABLE bookmark_types');
        $this->addSql('DROP TABLE bookmarks');
    }
}
