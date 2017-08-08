CREATE TABLE [dbo].[Permissions]
(
	[Id] INT NOT NULL PRIMARY KEY, 
    [Description] NCHAR(50) NOT NULL, 
    [IsModerator] BIT NOT NULL
)
