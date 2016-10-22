SELECT COUNT(DISTINCT installationID) FROM requests WHERE time_stamp > '2016-08-30 00:00:00';
SELECT COUNT(DISTINCT installationID) FROM requests;

CREATE USER 'quan'@'%' IDENTIFIED BY 't438qh1wUE';
GRANT SELECT,INSERT,UPDATE,DELETE,DROP ON gpamonitor.users TO 'quan'@'%';
GRANT SELECT,INSERT,UPDATE,DELETE,DROP ON gpamonitor.courses TO 'quan'@'%';
GRANT SELECT,INSERT,UPDATE,DELETE,DROP ON gpamonitor.sessions TO 'quan'@'%';
GRANT SELECT,INSERT,UPDATE,DELETE,DROP ON gpamonitor.requests TO 'quan'@'%';

REVOKE DROP ON gpamonitor.users FROM 'quan'@'%';
REVOKE DROP ON gpamonitor.courses FROM 'quan'@'%';
REVOKE DROP ON gpamonitor.sessions FROM 'quan'@'%';
REVOKE DROP ON gpamonitor.requests FROM 'quan'@'%';

fes