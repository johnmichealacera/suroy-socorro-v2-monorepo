import { Entity, PrimaryGeneratedColumn, Column, CreateDateColumn, UpdateDateColumn, Index, ManyToOne, JoinColumn } from 'typeorm';
import { TouristSpot } from './tourist-spot.entity';

@Entity('images')
export class Image {
    @PrimaryGeneratedColumn()
    id: number;

    @Column({ type: 'varchar', length: 255 })
    filename: string;

    @Column({ type: 'varchar', length: 255 })
    original_name: string;

    @Column({ type: 'varchar', length: 100 })
    mime_type: string;

    @Column({ type: 'int' })
    file_size: number;

    @Column({ type: 'varchar', length: 500 })
    file_path: string;

    @Column({ type: 'varchar', length: 500, nullable: true })
    url: string;

    @Column({ type: 'varchar', length: 100, nullable: true })
    alt_text: string;

    @Column({ type: 'varchar', length: 50, nullable: true })
    image_type: string; // 'main', 'detail', 'how_to_get_there', etc.

    @Column({ type: 'int', nullable: true })
    @Index()
    tourist_spot_id: number;

    @ManyToOne(() => TouristSpot, { onDelete: 'CASCADE' })
    @JoinColumn({ name: 'tourist_spot_id' })
    tourist_spot: TouristSpot;

    @Column({ type: 'int', default: 0 })
    sort_order: number;

    @Column({ type: 'boolean', default: true })
    is_active: boolean;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;
} 