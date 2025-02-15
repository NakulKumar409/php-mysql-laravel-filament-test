
CREATE INDEX idx_status_created_at ON orders(status, created_at);


SELECT * FROM orders WHERE status = 'pending' ORDER BY created_at DESC LIMIT 50;