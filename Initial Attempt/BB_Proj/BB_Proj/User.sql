CREATE TABLE [dbo].[User]
(
	[Id] INT NOT NULL PRIMARY KEY IDENTITY, 
    [Username] NVARCHAR(50) NOT NULL, 
    [RetiredFlag] BIT NOT NULL,
	UNIQUE(Username)
)
