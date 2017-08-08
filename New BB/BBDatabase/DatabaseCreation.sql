--Create User
CREATE TABLE [dbo].[User]
(
	[Id] INT NOT NULL PRIMARY KEY IDENTITY, 
    [Username] NVARCHAR(50) NOT NULL, 
    [RetiredFlag] BIT NOT NULL,
	UNIQUE(Username)
)

--Create User Security
--Create Notifications
--Create Notification Type
--Create UserFollow
--Create UserSummary
--Create UserCommunity
--Create UserTags
--Create Messages
--Create Discussion
--Create Article Tags
CREATE TABLE [dbo].[BBArticleTags]
(
	[Id] INT NOT NULL PRIMARY KEY IDENTITY,
	FOREIGN KEY (ArticleId) REFERENCES ArticleBill(Id),
	FOREIGN KEY (TagId) REFERENCES Tags(Id)
)
--Create Tags
CREATE TABLE [dbo].[BBTags]
(
	[Id] INT NOT NULL PRIMARY KEY IDENTITY,
	[Name] NCHAR(25) NOT NULL,
	[IsRequest] BIT NOT NULL,
	FOREIGN KEY (InfluenceId) REFERENCES Influence(Id),
	FOREIGN KEY (ArticleId) REFERENCES ArticleBill(Id)
)
--Create Community
--Create Priority Votes


--Create Source
CREATE TABLE [dbo].[Source]
(
	[Id] INT NOT NULL PRIMARY KEY IDENTITY, 
    [SourceType] NCHAR(2) NOT NULL, 
    [SourceAddress] NCHAR(75) NOT NULL, 
    [Name] NCHAR(25) NOT NULL, 
    [IsActive] BIT NOT NULL
)

--Create Priority
CREATE TABLE [dbo].[Priority]
(
	[Id] INT NOT NULL PRIMARY KEY IDENTITY, 
    [Description] NCHAR(25) NOT NULL
)

--Create Permissions
CREATE TABLE [dbo].[Permissions]
(
	[Id] INT NOT NULL PRIMARY KEY IDENTITY, 
    [Description] NCHAR(50) NOT NULL, 
    [IsModerator] BIT NOT NULL
)
--Create ArticleBill
CREATE TABLE [dbo].[ArticleBill]
(
	[Id] INT NOT NULL PRIMARY KEY IDENTITY, 
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

--Create Influence
CREATE TABLE [dbo].[Influence]
(
	[Id] INT NOT NULL PRIMARY KEY IDENTITY, 
    [Description] NCHAR(50) NOT NULL, 
    [WithinInfluenceId] INT NOT NULL
)


