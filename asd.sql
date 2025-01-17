USE [master]
GO
/****** Object:  Database [bookingbook]    Script Date: 06/12/2021 12:30:05 CH ******/
CREATE DATABASE [bookingbook]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'bookingbook', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\bookingbook.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'bookingbook_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\bookingbook_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT
GO
ALTER DATABASE [bookingbook] SET COMPATIBILITY_LEVEL = 150
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [bookingbook].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [bookingbook] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [bookingbook] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [bookingbook] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [bookingbook] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [bookingbook] SET ARITHABORT OFF 
GO
ALTER DATABASE [bookingbook] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [bookingbook] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [bookingbook] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [bookingbook] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [bookingbook] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [bookingbook] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [bookingbook] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [bookingbook] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [bookingbook] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [bookingbook] SET  ENABLE_BROKER 
GO
ALTER DATABASE [bookingbook] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [bookingbook] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [bookingbook] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [bookingbook] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [bookingbook] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [bookingbook] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [bookingbook] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [bookingbook] SET RECOVERY FULL 
GO
ALTER DATABASE [bookingbook] SET  MULTI_USER 
GO
ALTER DATABASE [bookingbook] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [bookingbook] SET DB_CHAINING OFF 
GO
ALTER DATABASE [bookingbook] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [bookingbook] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [bookingbook] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [bookingbook] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
EXEC sys.sp_db_vardecimal_storage_format N'bookingbook', N'ON'
GO
ALTER DATABASE [bookingbook] SET QUERY_STORE = OFF
GO
USE [bookingbook]
GO
/****** Object:  Table [dbo].[ctpm]    Script Date: 06/12/2021 12:30:05 CH ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[ctpm](
	[maphieumuon] [nvarchar](10) NOT NULL,
	[masach] [nvarchar](10) NOT NULL,
	[IDuser] [int] NOT NULL,
	[soluong] [int] NOT NULL,
	[trangthai] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[maphieumuon] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[ctpn]    Script Date: 06/12/2021 12:30:05 CH ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[ctpn](
	[maphieunhap] [nvarchar](10) NOT NULL,
	[soluong] [int] NOT NULL,
	[dongia] [float] NOT NULL,
	[tongtien] [money] NOT NULL,
	[masach] [nvarchar](10) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[maphieunhap] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cttg]    Script Date: 06/12/2021 12:30:05 CH ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cttg](
	[matg] [nvarchar](10) NOT NULL,
	[namsinh] [date] NOT NULL,
	[gioitinh] [bit] NOT NULL,
	[quequan] [nvarchar](100) NOT NULL,
	[tieusu] [nvarchar](500) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[matg] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[nxb]    Script Date: 06/12/2021 12:30:05 CH ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[nxb](
	[manxb] [nvarchar](10) NOT NULL,
	[tennxb] [nvarchar](50) NOT NULL,
	[diachi] [nvarchar](150) NOT NULL,
	[mota] [nvarchar](500) NOT NULL,
	[email] [nvarchar](100) NOT NULL,
	[sdt] [nvarchar](10) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[manxb] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[phieumuon]    Script Date: 06/12/2021 12:30:05 CH ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[phieumuon](
	[maphieumuon] [nvarchar](10) NOT NULL,
	[masach] [nvarchar](10) NOT NULL,
	[ngaymuon] [date] NOT NULL,
	[ngaytradukien] [date] NOT NULL,
 CONSTRAINT [PK_PM] PRIMARY KEY CLUSTERED 
(
	[masach] ASC,
	[maphieumuon] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[phieunhap]    Script Date: 06/12/2021 12:30:05 CH ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[phieunhap](
	[maphieunhap] [nvarchar](10) NOT NULL,
	[masach] [nvarchar](10) NOT NULL,
	[ngaynhap] [date] NOT NULL,
 CONSTRAINT [PK_PN] PRIMARY KEY CLUSTERED 
(
	[masach] ASC,
	[maphieunhap] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[sach]    Script Date: 06/12/2021 12:30:05 CH ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[sach](
	[masach] [nvarchar](10) NOT NULL,
	[tensach] [nvarchar](30) NOT NULL,
	[matg] [nvarchar](10) NOT NULL,
	[manxb] [nvarchar](10) NOT NULL,
	[matl] [nvarchar](10) NOT NULL,
	[sotrang] [int] NOT NULL,
	[noidung] [nvarchar](2000) NOT NULL,
	[taiban] [nvarchar](50) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[masach] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tacgia]    Script Date: 06/12/2021 12:30:05 CH ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tacgia](
	[matg] [nvarchar](10) NOT NULL,
	[masach] [nvarchar](10) NOT NULL,
	[tentg] [nvarchar](50) NOT NULL,
 CONSTRAINT [PK_TG] PRIMARY KEY CLUSTERED 
(
	[masach] ASC,
	[matg] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[theloai]    Script Date: 06/12/2021 12:30:05 CH ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[theloai](
	[matl] [nvarchar](10) NOT NULL,
	[tentl] [nvarchar](30) NOT NULL,
	[mota] [nvarchar](500) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[matl] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[users]    Script Date: 06/12/2021 12:30:05 CH ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[users](
	[IDuser] [int] NOT NULL,
	[tenuser] [nvarchar](50) NOT NULL,
	[diachi] [nvarchar](150) NOT NULL,
	[dienthoai] [int] NOT NULL,
	[nghenghiep] [nvarchar](50) NOT NULL,
	[email] [nvarchar](100) NOT NULL,
	[loaitk] [nvarchar](30) NOT NULL,
	[hovaten] [nvarchar](50) NOT NULL,
	[passwd] [nvarchar](50) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[IDuser] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[ctpm]  WITH CHECK ADD  CONSTRAINT [FK_CTPM1] FOREIGN KEY([IDuser])
REFERENCES [dbo].[users] ([IDuser])
GO
ALTER TABLE [dbo].[ctpm] CHECK CONSTRAINT [FK_CTPM1]
GO
ALTER TABLE [dbo].[phieumuon]  WITH CHECK ADD  CONSTRAINT [FK_PM1] FOREIGN KEY([maphieumuon])
REFERENCES [dbo].[ctpm] ([maphieumuon])
GO
ALTER TABLE [dbo].[phieumuon] CHECK CONSTRAINT [FK_PM1]
GO
ALTER TABLE [dbo].[phieumuon]  WITH CHECK ADD  CONSTRAINT [FK_PM2] FOREIGN KEY([masach])
REFERENCES [dbo].[sach] ([masach])
GO
ALTER TABLE [dbo].[phieumuon] CHECK CONSTRAINT [FK_PM2]
GO
ALTER TABLE [dbo].[phieunhap]  WITH CHECK ADD  CONSTRAINT [FK_PN1] FOREIGN KEY([maphieunhap])
REFERENCES [dbo].[ctpn] ([maphieunhap])
GO
ALTER TABLE [dbo].[phieunhap] CHECK CONSTRAINT [FK_PN1]
GO
ALTER TABLE [dbo].[phieunhap]  WITH CHECK ADD  CONSTRAINT [FK_PN2] FOREIGN KEY([masach])
REFERENCES [dbo].[sach] ([masach])
GO
ALTER TABLE [dbo].[phieunhap] CHECK CONSTRAINT [FK_PN2]
GO
ALTER TABLE [dbo].[sach]  WITH CHECK ADD  CONSTRAINT [FK_S2] FOREIGN KEY([manxb])
REFERENCES [dbo].[nxb] ([manxb])
GO
ALTER TABLE [dbo].[sach] CHECK CONSTRAINT [FK_S2]
GO
ALTER TABLE [dbo].[sach]  WITH CHECK ADD  CONSTRAINT [FK_S3] FOREIGN KEY([matl])
REFERENCES [dbo].[theloai] ([matl])
GO
ALTER TABLE [dbo].[sach] CHECK CONSTRAINT [FK_S3]
GO
ALTER TABLE [dbo].[tacgia]  WITH CHECK ADD  CONSTRAINT [FK_TG1] FOREIGN KEY([masach])
REFERENCES [dbo].[sach] ([masach])
GO
ALTER TABLE [dbo].[tacgia] CHECK CONSTRAINT [FK_TG1]
GO
ALTER TABLE [dbo].[tacgia]  WITH CHECK ADD  CONSTRAINT [FK_TG2] FOREIGN KEY([matg])
REFERENCES [dbo].[cttg] ([matg])
GO
ALTER TABLE [dbo].[tacgia] CHECK CONSTRAINT [FK_TG2]
GO
USE [master]
GO
ALTER DATABASE [bookingbook] SET  READ_WRITE 
GO
