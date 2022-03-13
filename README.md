# Fogger
### Fogger is a simple log service, suits for multi-service logging.
#### built with laravel, octane, swoole to handle massive incoming logs

## Usage
```
POST     api/entries                  - submit log info
GET      entries                      - display logs 
GET      entries/{entryId}            - display more details about specific id
```