package com.BackEndProJect.BackEndProJect.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.stereotype.Repository;

import java.util.List;

import com.BackEndProJect.BackEndProJect.model.EventModel;

@Repository
public interface EventRepository extends JpaRepository<EventModel, Integer> {

	@Query(value = "SELECT c FROM EventModel c WHERE event_id = ?1")
	public List<EventModel> getidqr(int iduser);
}
