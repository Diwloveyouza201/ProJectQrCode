package com.BackEndProJect.BackEndProJect.repository;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.stereotype.Repository;

import com.BackEndProJect.BackEndProJect.model.UserModel;

@Repository
public interface UserRepository extends JpaRepository<UserModel, Integer> {

	@Query(value = "SELECT c FROM UserModel c WHERE c.username = ?1 and c.password = ?2")
	public List<UserModel> fintByUser(String Username, String Password);

}
