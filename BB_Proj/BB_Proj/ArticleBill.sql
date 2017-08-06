CREATE TABLE [dbo].[Table1]
(
	[Id] INT NOT NULL PRIMARY KEY, 
    [Questionable] BIT NOT NULL, 
    [Verified] BIT NOT NULL, 
    [QuestionableCount] INT NULL, 
    [InfluenceId] INT NOT NULL, 
    [SourceId] INT NOT NULL, 
    [PriorityId] INT NOT NULL, 
    [Title] NCHAR(75) NOT NULL, 
    [IsBill] BIT NOT NULL, 
    [IsSpotlight] BIT NOT NULL, 
    [Updated] DATETIME NOT NULL,
	FOREIGN KEY (InfluenceId) REFERENCES Influence(Id),
	FOREIGN KEY (SourceId) REFERENCES Source(Id),
	FOREIGN KEY (PriorityId) REFERENCES Priority(Id)
)
