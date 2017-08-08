CREATE TABLE [dbo].[Source]
(
	[Id] INT NOT NULL PRIMARY KEY, 
    [SourceType] NCHAR(2) NOT NULL, 
    [SourceAddress] NCHAR(75) NOT NULL, 
    [Name] NCHAR(25) NOT NULL, 
    [IsActive] BIT NOT NULL
)
