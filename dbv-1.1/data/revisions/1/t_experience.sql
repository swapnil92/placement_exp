ALTER TABLE t_experience ADD FOREIGN KEY(fuser_id) REFERENCES t_user(user_id);

ALTER TABLE t_experience CHANGE `experience_view_flag` `experience_view_flag` tinyint DEFAULT 1;

