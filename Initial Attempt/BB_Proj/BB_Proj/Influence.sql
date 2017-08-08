CREATE TABLE [dbo].[Influence]
(
	[Id] INT NOT NULL PRIMARY KEY, 
    [Description] NCHAR(50) NOT NULL, 
    [WithinInfluenceId] INT NOT NULL
)
