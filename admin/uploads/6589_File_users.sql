CREATE TABLE [dbo].[Table]
(
	[Id] INT NOT NULL PRIMARY KEY IDENTITY, 
    [username] NVARCHAR(50) NOT NULL, 
    [password] NVARCHAR(50) NOT NULL, 
    [fullname] NVARCHAR(50) NOT NULL, 
    [picture] NVARCHAR(500) NOT NULL
)
